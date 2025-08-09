<?php
namespace App\Helpers;

use ReflectionClass;
use Str;

abstract class Enum
{
	protected array $consts = [];
	protected array $attributes = [];
	protected array $translations = [];
	protected static array $singleton = [];

	public static function singleton(): static
	{
		$class = get_called_class();

		if (!isset(static::$singleton[$class])) {
			static::$singleton[$class] = new $class();
		}

		return static::$singleton[$class];
	}

	public function __construct()
	{
		$class = get_called_class();
		$reflect = new ReflectionClass($class);
		$this->consts = $reflect->getConstants();

		if (method_exists($this, 'translations')) {
			$this->translations = (array)call_user_func([$this, 'translations']);
		}

		if (method_exists($this, 'attributes')) {
			$this->attributes = (array)call_user_func([$this, 'attributes']);
		}
	}

	public static function all(): array
	{
		$list = [];
		foreach (self::singleton()->consts as $name => $val) {
			$list[$name] = [
				'title' => self::singleton()->translate($val),
				'html' => self::singleton()->translate($val, true),
				'value' => $val
			];
		}
		return $list;
	}

	public static function except(array $except = []): array
	{
		return array_diff_key(self::all(), array_flip((array)$except));
	}

	public static function only(array $only = []): array
	{
		return array_intersect_key(self::all(), array_flip((array)$only));
	}

	public static function getLabel(string $const, bool $html = false): mixed
	{
		return self::singleton()->translate($const, $html);
	}

	public static function getLabels(bool $html = false): array
	{
		$list = [];
		foreach (self::singleton()->consts as $name => $const) {
			$list[$const] = self::getLabel($const, $html);
		}
		return $list;
	}

	public static function getLabelsExcept(array $except = [], bool $html = false): array
	{
		return array_diff_key(self::getLabels($html), array_flip((array)$except));
	}

	public static function getLabelsOnly(array $only = [], bool $html = false): array
	{
		return array_intersect_key(self::getLabels($html), array_flip((array)$only));
	}

	public static function getConstants(): array
	{
		return array_keys(self::singleton()->consts);
	}

	public static function getConstantsExcept(array $except = []): array
	{
		return array_keys(array_diff_key(self::singleton()->consts, array_flip((array)$except)));
	}

	public static function getSlugs(): array
	{
		return array_map(fn($const) => Str::slug($const), self::getConstants());
	}

	public static function getSlugsExcept(array $except = []): array
	{
		return array_diff_key(self::getSlugs(), array_flip((array)$except));
	}

	public static function getConstBySlug(string $slug): ?string
	{
		foreach (self::singleton()->consts as $const) {
			if (Str::slug($const) === $slug) {
				return $const;
			}
		}
		return null;
	}

	public static function exists(string $name, bool $strict = false): bool
	{
		$constants = self::singleton()->consts;
		if ($strict) {
			return array_key_exists($name, $constants);
		}
		return in_array(strtolower($name), array_map('strtolower', array_keys($constants)));
	}

	public static function getValues(): array
	{
		return array_values(self::singleton()->consts);
	}

	public static function getValuesExcept(array $except = []): array
	{
		return array_diff(self::getValues(), (array)$except);
	}

	public static function valueExists(mixed $value): bool
	{
		return in_array($value, self::getValues(), true);
	}

	protected function translate(string $const, bool $html = false): ?string
	{
		$label = $this->translations[$const] ?? null;

		if ($html && $label) {
			$attrs = isset($this->attributes[$const]) ? $this->htmlAttributes($this->attributes[$const]) : '';
			return "<label{$attrs}>{$label}</label>";
		}

		return $label;
	}

	protected function htmlAttributes(array $attributes): string
	{
		return collect($attributes)
			->map(fn($value, $key) => "{$key}=\"{$value}\"")
			->implode(' ');
	}
}
#!/bin/bash

# Test Caching Headers Script
# Tests if .htaccess caching rules are working properly

echo "🧪 Testing Caching Headers for Sawtic Website"
echo "=============================================="

# Test URLs (adjust domain as needed)
DOMAIN="http://localhost:8000"  # Change to your domain
IMAGE_URL="$DOMAIN/assets/images/test-truck.jpg"
CSS_URL="$DOMAIN/assets/css/voip-home.css"
JS_URL="$DOMAIN/assets/js/voip-home.js"

echo ""
echo "🖼️  Testing Image Caching Headers:"
echo "URL: $IMAGE_URL"
curl -I "$IMAGE_URL" 2>/dev/null | grep -E "(Cache-Control|Expires|Content-Type)" || echo "❌ No caching headers found"

echo ""
echo "🎨 Testing CSS Caching Headers:"
echo "URL: $CSS_URL"
curl -I "$CSS_URL" 2>/dev/null | grep -E "(Cache-Control|Expires|Content-Type)" || echo "❌ No caching headers found"

echo ""
echo "⚡ Testing JS Caching Headers:"
echo "URL: $JS_URL"
curl -I "$JS_URL" 2>/dev/null | grep -E "(Cache-Control|Expires|Content-Type)" || echo "❌ No caching headers found"

echo ""
echo "🗜️  Testing Gzip Compression:"
curl -H "Accept-Encoding: gzip" -I "$CSS_URL" 2>/dev/null | grep -i "content-encoding" || echo "❌ Gzip compression not detected"

echo ""
echo "🌐 Testing WebP Support:"
curl -H "Accept: image/webp" -I "${IMAGE_URL%.*}.webp" 2>/dev/null | grep -E "(Content-Type|Cache-Control)" || echo "❌ WebP not available or no headers"

echo ""
echo "✅ Testing complete! Check above for caching headers."
echo ""
echo "💡 Expected headers for images:"
echo "   Cache-Control: public, max-age=31536000, immutable"
echo "   Expires: Thu, 31 Dec 2025 23:59:59 GMT"
echo ""
echo "🔧 If headers are missing, ensure Apache modules are enabled:"
echo "   mod_expires, mod_headers, mod_deflate"
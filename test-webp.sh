#!/bin/bash

# Test WebP Auto-Serving
echo "🌐 Testing WebP Auto-Serving"
echo "=============================="

# Test image URLs
TEST_IMAGE="assets/images/about/about02.png"
WEBP_IMAGE="assets/images/about/about02.webp"

echo ""
echo "📋 Testing Image: $TEST_IMAGE"

# Check if WebP file exists
if [ -f "public/$WEBP_IMAGE" ]; then
    echo "✅ WebP file exists: $WEBP_IMAGE"
    
    # Get file sizes
    ORIGINAL_SIZE=$(stat -f%z "public/$TEST_IMAGE" 2>/dev/null || echo "0")
    WEBP_SIZE=$(stat -f%z "public/$WEBP_IMAGE" 2>/dev/null || echo "0")
    
    echo "📊 Original Size: $(numfmt --to=iec $ORIGINAL_SIZE)"
    echo "📊 WebP Size: $(numfmt --to=iec 
    $WEBP_SIZE)"
    
    # Calculate savings
    if [ $ORIGINAL_SIZE -gt 0 ]; then
        SAVINGS=$((100 - (WEBP_SIZE * 100 / ORIGINAL_SIZE)))
        echo "💾 Size Reduction: ${SAVINGS}%"
    fi
else
    echo "❌ WebP file NOT found: $WEBP_IMAGE"
fi

echo ""
echo "🧪 Testing WebP Support Headers:"

# Test without WebP support
echo "📱 Without WebP support:"
curl -I "http://localhost:8000/$TEST_IMAGE" 2>/dev/null | grep -E "(Content-Type|Content-Length)" | sed 's/^/   /'

# Test with WebP support
echo "🌐 With WebP support:"
curl -H "Accept: image/webp,image/*,*/*" -I "http://localhost:8000/$TEST_IMAGE" 2>/dev/null | grep -E "(Content-Type|Content-Length)" | sed 's/^/   /'

echo ""
echo "💡 Note: WebP auto-serving only works on Apache/Nginx servers"
echo "   Development server (php artisan serve) doesn't support .htaccess"
echo ""
echo "🚀 For production testing, deploy to Apache server and test with:"
echo "   curl -H \"Accept: image/webp\" -I https://sawtic.com/$TEST_IMAGE"
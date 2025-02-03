<!doctype html>
<html ⚡ lang="en">
<head>
    <meta charset="utf-8">
    <title>AMP Ad with Fallback</title>
    <link rel="canonical" href="https://mi.mudgames.in">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
    <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    
    <style amp-custom>
        .ad-container {
            width: 320px;
            height: 250px;
            position: relative;
        }

        amp-ad {
            z-index: 1;
        }

        .fallback-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f0f0f0;
          
        }

        .fallback-link {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #333;
            cursor: pointer;
        }

        .fallback-button {
            background: #4CAF50;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
            margin-top: 15px;
            font-weight: bold;
        }

        /* ✅ AMP will hide fallback content when ad loads successfully */
        amp-ad:not([amp-notsupported]) > [fallback] {
            display: none;
        }
    </style>
</head>
<body>
    <div class="ad-container">
    <amp-ad 
    layout="fixed"
    width="320"
    height="250"
    type="adsense"
    data-ad-client="ca-pub-2844605054428765"
    data-ad-slot="3864155281"
    data-loading-strategy="prefer-viewability-over-views">
    
    <!-- Fallback Content -->
    <div fallback class="fallback-content">
        <a href="https://play.google.com/store/apps/details?id=com.mudgames.ludowar" 
           target="_blank" class="fallback-link">
            <div>Play Ludo War Now!</div>
            <div class="fallback-button">Download Game</div>
        </a>
    </div>

</amp-ad>

    </div>
</body>
</html>

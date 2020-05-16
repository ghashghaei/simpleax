﻿<html>

<head>
    <link rel="icon" type="image/png" href="/favicon.png">
    <script async src="//www.googletagservices.com/tag/js/gpt.js"></script>
    <script async src="https://cdn-ocean-rivr-simplaex-test.s3.amazonaws.com/simplaex-code-challenge/prebid.js"></script>

    <script>
        var sizes = [
            [300, 250]
        ];
        var PREBID_TIMEOUT = 1000;
        var FAILSAFE_TIMEOUT = 3000;

        /*
        var adUnits = [{
            code: '/19968336/header-bid-tag-1',
            mediaTypes: {
                banner: {
                    sizes: sizes
                }
            },
            bids: [{
                bidder: 'appnexus',
                params: {
                    placementId: 13144370
                }
            }]
        }];
        */

        // ======== DO NOT EDIT BELOW THIS LINE =========== //
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        googletag.cmd.push(function() {
            googletag.pubads().disableInitialLoad();
        });

        var pbjs = pbjs || {};
        pbjs.que = pbjs.que || [];

        pbjs.que.push(function() {
            pbjs.addAdUnits(adUnits);
            pbjs.requestBids({
                bidsBackHandler: initAdserver,
                timeout: PREBID_TIMEOUT
            });
        });




        function initAdserver() {
            if (pbjs.initAdserverSet) return;
            pbjs.initAdserverSet = true;
            googletag.cmd.push(function() {
                pbjs.setTargetingForGPTAsync && pbjs.setTargetingForGPTAsync();
                googletag.pubads().refresh();
            });
        }

        
        // in case PBJS doesn't load
        setTimeout(function() {
            initAdserver();
        }, FAILSAFE_TIMEOUT);

        googletag.cmd.push(function() {
            googletag.defineSlot('/19968336/header-bid-tag-1', sizes, 'div-1')
                .addService(googletag.pubads());
            googletag.pubads().enableSingleRequest();
            googletag.enableServices();
        });

    </script>
    <script  src="./rivraddon.js"></script>

</head>

<body onclick="send_data()">
<h2>Basic Prebid.js Example</h2>
<h5>Div-1</h5>
<div id='div-1'>
    <script type='text/javascript'>
        googletag.cmd.push(function() {
            googletag.display('div-1');
        });

    </script>
</div>

<div id="Result"></div>
</body>

</html>
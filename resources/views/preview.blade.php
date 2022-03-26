<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="robots" content="noindex, nofollow">
    <style>
        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        body,
        html {
            height: 100%
        }

        body {
            margin: 0;
            overflow: hidden;
            background: rgba(6, 112, 20, 0.472) 0 0 repeat;
            position: relative;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
        }

        #header {
            background: #fff;
            height: 65px;
            overflow: hiddent;
            border-bottom: 1px solid #ddd;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            display: flex;
            align-items: center;
            padding: 0 10px
        }

        #header .logo img {
            height: 30px
        }

        #header .logo a {
            color: #1e5f8d;
            display: flex;
            align-items: center;
            text-decoration: none;
            font-size: 24px;
            letter-spacing: -.8px;
            font-weight: 500
        }

        #header .logo strong {
            margin-left: 6px;
            text-transform: uppercase
        }

        #header .logo strong span {
            color: #00a6eb
        }

        .icon {
            width: 24px;
            height: 24px
        }

        #preview {
            position: absolute;
            left: 0;
            right: 0;
            top: 65px;
            bottom: 0;
            transition: all .2s
        }

        #preview-frame {
            border: 0;
            position: absolute;
            transition: .5s
        }

        .preview-desktop {
            left: 0;
            width: 100%;
            height: 100%
        }

        .preview-tablet {
            width: 768px;
            height: 100%;
            left: calc(50% - 384px)
        }

        .preview-mobile {
            width: 380px;
            height: 680px;
            left: calc(50% - 190px);
            top: 0;
            margin-top: 20px
        }

        .preview-devices ul {
            margin: 0 0 0 20px;
            padding: 0;
            list-style: none;
            list-style-type: none;
            display: flex;
            align-items: center
        }

        .preview-devices a {
            transition: .3s;
            border-bottom: 2px solid #fff;
            color: #1e5f8d;
            display: inline-block;
            padding: 5px 10px;
            margin: 0 5px
        }

        .preview-devices a:hover {
            color: #00a6eb
        }

        .preview-devices .preview-devices-active a {
            border-bottom: 1px solid #000000;
            color: #00a6eb
        }

        .navigate {
            margin-left: auto
        }

        .navigate .icon-chevron-left,
        .navigate .icon-chevron-right {
            width: 36px;
            height: 36px
        }

        .navigate ul {
            padding: 0;
            margin: 0;
            list-style: none;
            display: flex;
            align-items: center
        }

        .navigate li {
            margin: 0 0 0 5px
        }

        .navigate li:last-child {
            margin-right: 0
        }

        .navigate a {
            transition: .3s;
            padding: 0 10px;
            border: solid 1px #dfdfdf;
            border-radius: 4px;
            color: #828282;
            display: flex;
            align-items: center;
            height: 40px;
            justify-content: center;
            text-decoration: none
        }

        .navigate a:hover {
            border: solid 1px #0a0a0a;
            color: #00a6eb
        }

        .navigate a.download {
            background: #00a6eb;
            border: solid 1px #00a6eb;
            color: #fff;
            font-size: 15px;
            padding: 0 16px
        }

        .navigate a.download span {
            padding-left: 4px
        }

        .navigate a.download:hover {
            background: #00b4ff;
            border-color: #00b4ff
        }

        .navigate a.first-latest {
            background: #e6e6e6;
            border: 1px solid #e6e6e6;
            color: #fff
        }

        @media (max-width:1024px) {
            .preview-devices {
                display: none
            }
        }

        @media (max-width:768px) {
            .logo {
                display: none
            }

            .navigate {
                margin: 0;
                width: calc(100% - 4px)
            }

            .navigate ul {
                justify-content: center
            }

            .navigate li {
                flex-grow: 1;
                flex-
    </style>
</head>

<body>
    <header id="header">

        <div class="logo">
            <a href="https://bootstrapmade.com/" rel="home" title="" title="Back to BootstrapMade Homepage"><strong>Bootstrap<span>Made</span></strong></a>
        </div>
        <div class="preview-devices">
            <ul>
                <li class="preview-test preview-devices-active" id="preview-test-desktop" title="Desktop preview of the  HeroBiz template"><a href="">A</a></li>
                <li class="preview-test" id="preview-test-tablet" title="Tablet preview of the HeroBiz template"><a href="">B</a></li>
                <li class="preview-test" id="preview-test-mobile" title="Mobile preview of the HeroBiz template"><a href="">C</a></li>
            </ul>
        </div>

    </header>

    <div id="preview">
        <iframe id="preview-frame" class="preview-desktop" src="https://rwdigital.tech" frameborder="0"></iframe>
    </div>
    <script>
        (() => {
            function n(t) {
                for (var e = t + "=", s = document.cookie.split(";"), i = 0; i < s.length; i++) {
                    for (var r = s[i]; r.charAt(0) === " ";) r = r.substring(1);
                    if (r.indexOf(e) === 0) return r.substring(e.length, r.length)
                }
                return ""
            }

            function o(t, e, s) {
                var i = new Date;
                i.setTime(i.getTime() + s * 24 * 60 * 60 * 1e3);
                var r = "expires=" + i.toUTCString();
                document.cookie = t + "=" + e + ";" + r + ";path=/"
            }
            if (!n("sitevisitor")) {
                let t = new Object,
                    e = new Date;
                t.referer = document.referrer, t.request = location.pathname.substring(1), t.time = e.getFullYear() + "-" + (e.getMonth() + 1) + "-" + e.getDate() + " " + e.getHours() + ":" + e.getMinutes() + ":" + e.getSeconds(), o("sitevisitor", btoa(JSON.stringify(t)), 365)
            }
            document.addEventListener("DOMContentLoaded", () => {
                "use strict";
                document.querySelectorAll(".preview-test").forEach(e => {
                    e.addEventListener("click", function(s) {
                        s.preventDefault(), document.querySelector(".preview-devices-active").classList.remove("preview-devices-active"), this.classList.add("preview-devices-active"), document.querySelector("#preview-frame").className = this.id.replace("-test", "")
                    })
                })
            });
        })();
    </script>
</body>

</html>

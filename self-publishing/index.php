<?php include 'includes/config.php'; ?>

<?php
session_start();

// Retrieve IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Retrieve location using IP address
$location = file_get_contents("http://ip-api.com/json/{$ip}");
$locationData = json_decode($location);

// Retrieve internet connection details
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get the complete URL with protocol and domain
$currentFullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="We are happy to help authors create a visually appealing and professional cover design that accurately represents their book. Whether you plan to publish your book independently or through a traditional publishing company, we can help you create a cover that will stand out and capture the attention of potential readers." />
    <meta name="viewport" content="width=device-width" />
    <style type="text/css">
    :host,
    :root {
        --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
        --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
        --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
        --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
        --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
        --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
        --fa-font-sharp-regular: normal 400 1em/1 "Font Awesome 6 Sharp";
        --fa-font-sharp-light: normal 300 1em/1 "Font Awesome 6 Sharp";
        --fa-font-sharp-thin: normal 100 1em/1 "Font Awesome 6 Sharp";
        --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
    }

    svg:not(:host).svg-inline--fa,
    svg:not(:root).svg-inline--fa {
        overflow: visible;
        box-sizing: content-box;
    }

    .svg-inline--fa {
        display: var(--fa-display, inline-block);
        height: 1em;
        overflow: visible;
        vertical-align: -0.125em;
    }

    .svg-inline--fa.fa-2xs {
        vertical-align: 0.1em;
    }

    .svg-inline--fa.fa-xs {
        vertical-align: 0;
    }

    .svg-inline--fa.fa-sm {
        vertical-align: -0.0714285705em;
    }

    .svg-inline--fa.fa-lg {
        vertical-align: -0.2em;
    }

    .svg-inline--fa.fa-xl {
        vertical-align: -0.25em;
    }

    .svg-inline--fa.fa-2xl {
        vertical-align: -0.3125em;
    }

    .svg-inline--fa.fa-pull-left {
        margin-right: var(--fa-pull-margin, 0.3em);
        width: auto;
    }

    .svg-inline--fa.fa-pull-right {
        margin-left: var(--fa-pull-margin, 0.3em);
        width: auto;
    }

    .svg-inline--fa.fa-li {
        width: var(--fa-li-width, 2em);
        top: 0.25em;
    }

    .svg-inline--fa.fa-fw {
        width: var(--fa-fw-width, 1.25em);
    }

    .fa-layers svg.svg-inline--fa {
        bottom: 0;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
    }

    .fa-layers-counter,
    .fa-layers-text {
        display: inline-block;
        position: absolute;
        text-align: center;
    }

    .fa-layers {
        display: inline-block;
        height: 1em;
        position: relative;
        text-align: center;
        vertical-align: -0.125em;
        width: 1em;
    }

    .fa-layers svg.svg-inline--fa {
        -webkit-transform-origin: center center;
        transform-origin: center center;
    }

    .fa-layers-text {
        left: 50%;
        top: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        -webkit-transform-origin: center center;
        transform-origin: center center;
    }

    .fa-layers-counter {
        background-color: var(--fa-counter-background-color, #ff253a);
        border-radius: var(--fa-counter-border-radius, 1em);
        box-sizing: border-box;
        color: var(--fa-inverse, #fff);
        line-height: var(--fa-counter-line-height, 1);
        max-width: var(--fa-counter-max-width, 5em);
        min-width: var(--fa-counter-min-width, 1.5em);
        overflow: hidden;
        padding: var(--fa-counter-padding, 0.25em 0.5em);
        right: var(--fa-right, 0);
        text-overflow: ellipsis;
        top: var(--fa-top, 0);
        -webkit-transform: scale(var(--fa-counter-scale, 0.25));
        transform: scale(var(--fa-counter-scale, 0.25));
        -webkit-transform-origin: top right;
        transform-origin: top right;
    }

    .fa-layers-bottom-right {
        bottom: var(--fa-bottom, 0);
        right: var(--fa-right, 0);
        top: auto;
        -webkit-transform: scale(var(--fa-layers-scale, 0.25));
        transform: scale(var(--fa-layers-scale, 0.25));
        -webkit-transform-origin: bottom right;
        transform-origin: bottom right;
    }

    .fa-layers-bottom-left {
        bottom: var(--fa-bottom, 0);
        left: var(--fa-left, 0);
        right: auto;
        top: auto;
        -webkit-transform: scale(var(--fa-layers-scale, 0.25));
        transform: scale(var(--fa-layers-scale, 0.25));
        -webkit-transform-origin: bottom left;
        transform-origin: bottom left;
    }

    .fa-layers-top-right {
        top: var(--fa-top, 0);
        right: var(--fa-right, 0);
        -webkit-transform: scale(var(--fa-layers-scale, 0.25));
        transform: scale(var(--fa-layers-scale, 0.25));
        -webkit-transform-origin: top right;
        transform-origin: top right;
    }

    .fa-layers-top-left {
        left: var(--fa-left, 0);
        right: auto;
        top: var(--fa-top, 0);
        -webkit-transform: scale(var(--fa-layers-scale, 0.25));
        transform: scale(var(--fa-layers-scale, 0.25));
        -webkit-transform-origin: top left;
        transform-origin: top left;
    }

    .fa-1x {
        font-size: 1em;
    }

    .fa-2x {
        font-size: 2em;
    }

    .fa-3x {
        font-size: 3em;
    }

    .fa-4x {
        font-size: 4em;
    }

    .fa-5x {
        font-size: 5em;
    }

    .fa-6x {
        font-size: 6em;
    }

    .fa-7x {
        font-size: 7em;
    }

    .fa-8x {
        font-size: 8em;
    }

    .fa-9x {
        font-size: 9em;
    }

    .fa-10x {
        font-size: 10em;
    }

    .fa-2xs {
        font-size: 0.625em;
        line-height: 0.1em;
        vertical-align: 0.225em;
    }

    .fa-xs {
        font-size: 0.75em;
        line-height: 0.0833333337em;
        vertical-align: 0.125em;
    }

    .fa-sm {
        font-size: 0.875em;
        line-height: 0.0714285718em;
        vertical-align: 0.0535714295em;
    }

    .fa-lg {
        font-size: 1.25em;
        line-height: 0.05em;
        vertical-align: -0.075em;
    }

    .fa-xl {
        font-size: 1.5em;
        line-height: 0.0416666682em;
        vertical-align: -0.125em;
    }

    .fa-2xl {
        font-size: 2em;
        line-height: 0.03125em;
        vertical-align: -0.1875em;
    }

    .fa-fw {
        text-align: center;
        width: 1.25em;
    }

    .fa-ul {
        list-style-type: none;
        margin-left: var(--fa-li-margin, 2.5em);
        padding-left: 0;
    }

    .fa-ul>li {
        position: relative;
    }

    .fa-li {
        left: calc(var(--fa-li-width, 2em) * -1);
        position: absolute;
        text-align: center;
        width: var(--fa-li-width, 2em);
        line-height: inherit;
    }

    .fa-border {
        border-color: var(--fa-border-color, #eee);
        border-radius: var(--fa-border-radius, 0.1em);
        border-style: var(--fa-border-style, solid);
        border-width: var(--fa-border-width, 0.08em);
        padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
    }

    .fa-pull-left {
        float: left;
        margin-right: var(--fa-pull-margin, 0.3em);
    }

    .fa-pull-right {
        float: right;
        margin-left: var(--fa-pull-margin, 0.3em);
    }

    .fa-beat {
        -webkit-animation-name: fa-beat;
        animation-name: fa-beat;
        -webkit-animation-delay: var(--fa-animation-delay, 0s);
        animation-delay: var(--fa-animation-delay, 0s);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing,
                ease-in-out);
        animation-timing-function: var(--fa-animation-timing, ease-in-out);
    }

    .fa-bounce {
        -webkit-animation-name: fa-bounce;
        animation-name: fa-bounce;
        -webkit-animation-delay: var(--fa-animation-delay, 0s);
        animation-delay: var(--fa-animation-delay, 0s);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing,
                cubic-bezier(0.28, 0.84, 0.42, 1));
        animation-timing-function: var(--fa-animation-timing,
                cubic-bezier(0.28, 0.84, 0.42, 1));
    }

    .fa-fade {
        -webkit-animation-name: fa-fade;
        animation-name: fa-fade;
        -webkit-animation-delay: var(--fa-animation-delay, 0s);
        animation-delay: var(--fa-animation-delay, 0s);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing,
                cubic-bezier(0.4, 0, 0.6, 1));
        animation-timing-function: var(--fa-animation-timing,
                cubic-bezier(0.4, 0, 0.6, 1));
    }

    .fa-beat-fade {
        -webkit-animation-name: fa-beat-fade;
        animation-name: fa-beat-fade;
        -webkit-animation-delay: var(--fa-animation-delay, 0s);
        animation-delay: var(--fa-animation-delay, 0s);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing,
                cubic-bezier(0.4, 0, 0.6, 1));
        animation-timing-function: var(--fa-animation-timing,
                cubic-bezier(0.4, 0, 0.6, 1));
    }

    .fa-flip {
        -webkit-animation-name: fa-flip;
        animation-name: fa-flip;
        -webkit-animation-delay: var(--fa-animation-delay, 0s);
        animation-delay: var(--fa-animation-delay, 0s);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing,
                ease-in-out);
        animation-timing-function: var(--fa-animation-timing, ease-in-out);
    }

    .fa-shake {
        -webkit-animation-name: fa-shake;
        animation-name: fa-shake;
        -webkit-animation-delay: var(--fa-animation-delay, 0s);
        animation-delay: var(--fa-animation-delay, 0s);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, linear);
        animation-timing-function: var(--fa-animation-timing, linear);
    }

    .fa-spin {
        -webkit-animation-name: fa-spin;
        animation-name: fa-spin;
        -webkit-animation-delay: var(--fa-animation-delay, 0s);
        animation-delay: var(--fa-animation-delay, 0s);
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 2s);
        animation-duration: var(--fa-animation-duration, 2s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, linear);
        animation-timing-function: var(--fa-animation-timing, linear);
    }

    .fa-spin-reverse {
        --fa-animation-direction: reverse;
    }

    .fa-pulse,
    .fa-spin-pulse {
        -webkit-animation-name: fa-spin;
        animation-name: fa-spin;
        -webkit-animation-direction: var(--fa-animation-direction, normal);
        animation-direction: var(--fa-animation-direction, normal);
        -webkit-animation-duration: var(--fa-animation-duration, 1s);
        animation-duration: var(--fa-animation-duration, 1s);
        -webkit-animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        animation-iteration-count: var(--fa-animation-iteration-count,
                infinite);
        -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
        animation-timing-function: var(--fa-animation-timing, steps(8));
    }

    @media (prefers-reduced-motion: reduce) {

        .fa-beat,
        .fa-beat-fade,
        .fa-bounce,
        .fa-fade,
        .fa-flip,
        .fa-pulse,
        .fa-shake,
        .fa-spin,
        .fa-spin-pulse {
            -webkit-animation-delay: -1ms;
            animation-delay: -1ms;
            -webkit-animation-duration: 1ms;
            animation-duration: 1ms;
            -webkit-animation-iteration-count: 1;
            animation-iteration-count: 1;
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
            -webkit-transition-duration: 0s;
            transition-duration: 0s;
        }
    }

    @-webkit-keyframes fa-beat {

        0%,
        90% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        45% {
            -webkit-transform: scale(var(--fa-beat-scale, 1.25));
            transform: scale(var(--fa-beat-scale, 1.25));
        }
    }

    @keyframes fa-beat {

        0%,
        90% {
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        45% {
            -webkit-transform: scale(var(--fa-beat-scale, 1.25));
            transform: scale(var(--fa-beat-scale, 1.25));
        }
    }

    @-webkit-keyframes fa-bounce {
        0% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }

        10% {
            -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1),
                    var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            transform: scale(var(--fa-bounce-start-scale-x, 1.1),
                    var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
        }

        30% {
            -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9),
                    var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            transform: scale(var(--fa-bounce-jump-scale-x, 0.9),
                    var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
        }

        50% {
            -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05),
                    var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            transform: scale(var(--fa-bounce-land-scale-x, 1.05),
                    var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
        }

        57% {
            -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
        }

        64% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }

        100% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }
    }

    @keyframes fa-bounce {
        0% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }

        10% {
            -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1),
                    var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
            transform: scale(var(--fa-bounce-start-scale-x, 1.1),
                    var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
        }

        30% {
            -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9),
                    var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
            transform: scale(var(--fa-bounce-jump-scale-x, 0.9),
                    var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
        }

        50% {
            -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05),
                    var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
            transform: scale(var(--fa-bounce-land-scale-x, 1.05),
                    var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
        }

        57% {
            -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
            transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
        }

        64% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }

        100% {
            -webkit-transform: scale(1, 1) translateY(0);
            transform: scale(1, 1) translateY(0);
        }
    }

    @-webkit-keyframes fa-fade {
        50% {
            opacity: var(--fa-fade-opacity, 0.4);
        }
    }

    @keyframes fa-fade {
        50% {
            opacity: var(--fa-fade-opacity, 0.4);
        }
    }

    @-webkit-keyframes fa-beat-fade {

        0%,
        100% {
            opacity: var(--fa-beat-fade-opacity, 0.4);
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        50% {
            opacity: 1;
            -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
            transform: scale(var(--fa-beat-fade-scale, 1.125));
        }
    }

    @keyframes fa-beat-fade {

        0%,
        100% {
            opacity: var(--fa-beat-fade-opacity, 0.4);
            -webkit-transform: scale(1);
            transform: scale(1);
        }

        50% {
            opacity: 1;
            -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
            transform: scale(var(--fa-beat-fade-scale, 1.125));
        }
    }

    @-webkit-keyframes fa-flip {
        50% {
            -webkit-transform: rotate3d(var(--fa-flip-x, 0),
                    var(--fa-flip-y, 1),
                    var(--fa-flip-z, 0),
                    var(--fa-flip-angle, -180deg));
            transform: rotate3d(var(--fa-flip-x, 0),
                    var(--fa-flip-y, 1),
                    var(--fa-flip-z, 0),
                    var(--fa-flip-angle, -180deg));
        }
    }

    @keyframes fa-flip {
        50% {
            -webkit-transform: rotate3d(var(--fa-flip-x, 0),
                    var(--fa-flip-y, 1),
                    var(--fa-flip-z, 0),
                    var(--fa-flip-angle, -180deg));
            transform: rotate3d(var(--fa-flip-x, 0),
                    var(--fa-flip-y, 1),
                    var(--fa-flip-z, 0),
                    var(--fa-flip-angle, -180deg));
        }
    }

    @-webkit-keyframes fa-shake {
        0% {
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        4% {
            -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
        }

        24%,
        8% {
            -webkit-transform: rotate(-18deg);
            transform: rotate(-18deg);
        }

        12%,
        28% {
            -webkit-transform: rotate(18deg);
            transform: rotate(18deg);
        }

        16% {
            -webkit-transform: rotate(-22deg);
            transform: rotate(-22deg);
        }

        20% {
            -webkit-transform: rotate(22deg);
            transform: rotate(22deg);
        }

        32% {
            -webkit-transform: rotate(-12deg);
            transform: rotate(-12deg);
        }

        36% {
            -webkit-transform: rotate(12deg);
            transform: rotate(12deg);
        }

        100%,
        40% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }
    }

    @keyframes fa-shake {
        0% {
            -webkit-transform: rotate(-15deg);
            transform: rotate(-15deg);
        }

        4% {
            -webkit-transform: rotate(15deg);
            transform: rotate(15deg);
        }

        24%,
        8% {
            -webkit-transform: rotate(-18deg);
            transform: rotate(-18deg);
        }

        12%,
        28% {
            -webkit-transform: rotate(18deg);
            transform: rotate(18deg);
        }

        16% {
            -webkit-transform: rotate(-22deg);
            transform: rotate(-22deg);
        }

        20% {
            -webkit-transform: rotate(22deg);
            transform: rotate(22deg);
        }

        32% {
            -webkit-transform: rotate(-12deg);
            transform: rotate(-12deg);
        }

        36% {
            -webkit-transform: rotate(12deg);
            transform: rotate(12deg);
        }

        100%,
        40% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }
    }

    @-webkit-keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes fa-spin {
        0% {
            -webkit-transform: rotate(0);
            transform: rotate(0);
        }

        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    .fa-rotate-90 {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .fa-rotate-180 {
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }

    .fa-rotate-270 {
        -webkit-transform: rotate(270deg);
        transform: rotate(270deg);
    }

    .fa-flip-horizontal {
        -webkit-transform: scale(-1, 1);
        transform: scale(-1, 1);
    }

    .fa-flip-vertical {
        -webkit-transform: scale(1, -1);
        transform: scale(1, -1);
    }

    .fa-flip-both,
    .fa-flip-horizontal.fa-flip-vertical {
        -webkit-transform: scale(-1, -1);
        transform: scale(-1, -1);
    }

    .fa-rotate-by {
        -webkit-transform: rotate(var(--fa-rotate-angle, none));
        transform: rotate(var(--fa-rotate-angle, none));
    }

    .fa-stack {
        display: inline-block;
        vertical-align: middle;
        height: 2em;
        position: relative;
        width: 2.5em;
    }

    .fa-stack-1x,
    .fa-stack-2x {
        bottom: 0;
        left: 0;
        margin: auto;
        position: absolute;
        right: 0;
        top: 0;
        z-index: var(--fa-stack-z-index, auto);
    }

    .svg-inline--fa.fa-stack-1x {
        height: 1em;
        width: 1.25em;
    }

    .svg-inline--fa.fa-stack-2x {
        height: 2em;
        width: 2.5em;
    }

    .fa-inverse {
        color: var(--fa-inverse, #fff);
    }

    .fa-sr-only,
    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }

    .fa-sr-only-focusable:not(:focus),
    .sr-only-focusable:not(:focus) {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border-width: 0;
    }

    .svg-inline--fa .fa-primary {
        fill: var(--fa-primary-color, currentColor);
        opacity: var(--fa-primary-opacity, 1);
    }

    .svg-inline--fa .fa-secondary {
        fill: var(--fa-secondary-color, currentColor);
        opacity: var(--fa-secondary-opacity, 0.4);
    }

    .svg-inline--fa.fa-swap-opacity .fa-primary {
        opacity: var(--fa-secondary-opacity, 0.4);
    }

    .svg-inline--fa.fa-swap-opacity .fa-secondary {
        opacity: var(--fa-primary-opacity, 1);
    }

    .svg-inline--fa mask .fa-primary,
    .svg-inline--fa mask .fa-secondary {
        fill: #000;
    }

    .fa-duotone.fa-inverse,
    .fad.fa-inverse {
        color: var(--fa-inverse, #fff);
    }
    </style>
    <link rel="shortcut icon" href="https://authorstime.com/fav.png" type="image/x-icon">
   <link rel="icon" href="https://authorstime.com/fav.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <meta name="generator" content="Astro v4.0.7" />
    <title>Welcome to <?php echo WEBSITE_NAME; ?>.</title>
    <link rel="stylesheet" href="_astro/style.css" />
    <style>
    .popupforms ul li input[type="text"],
    .popupforms ul li input[type="email"],
    .popupforms ul li input[type="tel"],
    .popupforms ul li textarea {
        background: #fafafa;
        border: #dcdcdc 1px solid;
        padding: 10px 10px 10px 33px;
        width: 100%;
        border-radius: 7px;
        font-size: 14px;
        color: #000;
        box-shadow: none !important;
        outline: none 0px !important;
    }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" />
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "okoakibb1u");
    </script>
</head>

<header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 p-3">
                <a href="javascript:" class="logo">
                    <img src="./_astro/logo.png" alt="logo" width="160" loading="lazy" decoding="async" />
                </a>
            </div>
            <div class="col-md-9">
                <ul class="cinfo">
                    <li class="info ml-3">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:<?php echo ADMIN_EMAIL; ?>"><span
                                class="__cf_email__"><?php echo ADMIN_EMAIL; ?></span></a>
                    </li>
                    <li class="info info-bar">
                        <i class="fas fa-phone-volume"></i>
                        <a href="<?php echo PHONE_HREF; ?>"><?php echo PHONE; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

<body>
    <main>
        <section class="inner-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="ghostwriting">
                            Professional Self Publishing Services
                        </h3>
                        <h1>
                            <span>BEST SELF PUBLISHING SERVICES</span> AT AFFORDABLE PRICES!
                        </h1>
                        <p>
                            You've poured your heart and soul into writing your book; now
                            it's time to share it with the world.
                        </p>
                        <div class="banner-list">
                            <ul>
                                <div>
                                    <li>• Retailer Collaboration</li>
                                    <li>• Exclusive Content Bundles</li>
                                </div>
                                <div>
                                    <li>• Referral Rewards</li>
                                    <li class="satisfy">• 100% Satisfaction Or It's Free</li>
                                </div>
                                <li>• 24/7 Support For Peace Of Mind</li>
                            </ul>
                        </div>
                        <div class="btn-block">
                            <a href="javascript:" class="btn btn-blue various display-n get-started"
                                data-bs-toggle="modal" data-bs-target=".exampleModal">
                                <span>
                                    Claim Your Expert Consultation
                                    <i class="fas fa-long-arrow-right"></i>
                                </span>
                            </a>
                            <a href="javascript:" onclick="$zopim.livechat.window.toggle();"
                                class="btn btn-blue-brd chat display-n live-view">
                                <span>
                                    Let's Talk!
                                    <i class="fas fa-long-arrow-right"></i>
                                </span>
                            </a>
                            <a href="<?php echo PHONE_HREF; ?>"
                                class="btn btn-white-brd chat d-lg-none d-block phone-icon">
                                <span>
                                    <i class="fas fa-phone-volume"></i>
                                    <?php echo PHONE; ?>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-5 banner-after-img col-sm-offset-1">
                        <div class="inner-banner-form-main">
                            <div class="inner-banner-form">
                                <h6>Do You Have a Manuscript Ready?</h6>
                                <h2>PUBLISH YOUR BOOK NOW</h2>
                                <p class="paras">
                                    Take the first step towards becoming a published author
                                </p>
                                <form action="includes/sendmail/sendmail.php" method="POST">
                                    <!--hidden required values-->
                                    <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                                    <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                                    <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                                    <input type="hidden" name="internet_connection"
                                        value="<?php echo $locationData->isp; ?>" />
                                    <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                                    <input type="hidden" name="region"
                                        value="<?php echo $locationData->regionName; ?>" />
                                    <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                                    <div class="fld-inp">
                                        <input type="text" name="name" required placeholder="Full Name *"
                                            data-cf-modified- />
                                    </div>
                                    <div class="fld-inp">
                                        <input type="email" name="email" required placeholder="Email Address *" />
                                    </div>
                                    <div class="fld-inp">
                                        <input type="tel" id="phone2" name="phone" required placeholder="Phone Number *"
                                            pattern="[(]{1}[0-9]{3}[)]{1}[s]{1}[0-9]{3}[-]{1}[0-9]{4}"
                                            title="(000) 000-0000" />
                                    </div>
                                    <div class="fld-inp">
                                        <select name="service" class="form-control" required>
                                            <option value>Select a genre:</option>
                                            <option value="Business">Business</option>
                                            <option value="Memoir / Biography">
                                                Memoir / Biography
                                            </option>
                                            <option value="Health / Wellness">
                                                Health / Wellness
                                            </option>
                                            <option value="Self-Help / Personal Development">
                                                Self-Help / Personal Development
                                            </option>
                                            <option value="General Nonfiction">
                                                General Nonfiction
                                            </option>
                                            <option value="Fiction">Fiction</option>
                                            <option value="Children's">Children's</option>
                                            <option value="Science / Technology">
                                                Science / Technology
                                            </option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group-select">
                                        <h5>Additional Services:</h5>
                                        <div class="d-flex align-items-center checkboxes justify-content-between mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="additionalservices[]" value="Book Cover" id="bookcover" />
                                                <label class="form-check-label" for="bookcover">Book Cover</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="additionalservices[]" value="Editing and Proofreading"
                                                    id="editing" />
                                                <label class="form-check-label" for="editing">Editing and
                                                    Proofreading</label>
                                            </div>
                                        </div>
                                    </div>
                                    <select name="genre" required class="form-control menuscript">
                                        <option value>Manuscript*</option>
                                        <option value=" Completed">Completed</option>
                                        <option value="In-progress">In-progress</option>
                                        <option value="Idea">Idea</option>
                                    </select>
                                    <div class="fld-inp fld-txt">
                                        <textarea name="message" placeholder="Enter Message*" required></textarea>
                                    </div>
                                    <button type="submit" class="free-consult">
                                        Claim Your Expert Consultation
                                        <!-- <i class="fa fa-chevron-right"></i> -->
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="publishing-amazon p">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="./_astro/publishing-amazon._XHc2-Do_FgPpz.avif" alt="amazon" width="443" height="449"
                            loading="lazy" decoding="async" />
                    </div>
                    <div class="col-md-6">
                        <div class="heading">
                            <h3>We offer a</h3>
                            <h2>Comprehensive Range of <span>Self Publishing</span> Services</h2>
                            <p>
                                We will transform your manuscript into a professionally
                                crafted masterpiece at <?php echo WEBSITE_NAME; ?>. With our expertise
                                and industry know-how, we'll guide you through every step of
                                the publishing process, ensuring your book receives the
                                attention it deserves.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="personal-book">
            <div class="container">
                <div class="heading text-center">
                    <h3>Here's what</h3>
                    <h2>Our <span>Self Publishing</span> Services Entail</h2>
                    <p>
                        We offer publication services to ensure your book is industry
                        ready—Formatting, Bookcovers, Proofreading & Editing, ISBN &
                        Barcode registration, and author copies.
                    </p>
                </div>
                <div class="row autoplay1">
                    <div class="col-md-6">
                        <div class="box">
                            <img src="./_astro/pn1.t11cMIkR_wlKQC.avif" alt="pn" width="64" height="64" loading="lazy"
                                decoding="async" />
                            <p>
                                <span>
                                    Professional Formatting: Your Words, Professionally
                                    Presented
                                </span>
                                Our team of formatting wizards will take your manuscript and
                                work their magic, ensuring that it meets industry standards
                                and looks visually stunning. From font selection to page
                                layout, we'll ensure your book is a joy to read, page after
                                page.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <img src="./_astro/pn2.9ECR87gw_TWllL.avif" alt="pn" width="57" height="66" loading="lazy"
                                decoding="async" />
                            <p>
                                <span>
                                    Eye-Catching Book Covers: Grab Attention and Leave a Lasting
                                    Impression
                                </span>
                                They say not to judge a book by its cover, but let's face it -
                                a captivating book cover goes a long way. Our talented
                                designers will create a visually striking cover that captures
                                the essence of your story, enticing readers to pick up your
                                book and dive into its pages.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <img src="./_astro/pn3.moHdZ28y_Z1LDnI6.avif" alt="pn" width="63" height="49" loading="lazy"
                                decoding="async" />
                            <p>
                                <span>
                                    Proofreading and Editing: Polish Your Prose to Perfection
                                </span>
                                Our eagle-eyed proofreaders and editors will meticulously comb
                                through your manuscript, catching those pesky typos,
                                correcting grammar and punctuation, and refining your writing
                                to ensure a smooth and enjoyable reading experience.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <img src="./_astro/pn4.nnMbRQve_Z17PfOR.avif" alt="pn" width="60" height="59" loading="lazy"
                                decoding="async" />
                            <p>
                                <span>
                                    ISBN and Barcode Registration: Making Your Book Official
                                </span>
                                We'll handle all the technicalities of obtaining and
                                registering your unique ISBN and barcode, giving your book the
                                professional edge it needs to be recognized in the literary
                                world.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <img src="./_astro/pn5.Ry760wYb_Z1VlAvR.avif" alt="pn" width="60" height="48" loading="lazy"
                                decoding="async" />
                            <p>
                                <span>
                                    Distribution to Major Platforms: Reaching a Wider Audience
                                </span>
                                We'll take care of getting your book on the virtual shelves of
                                major online retailers and e-book platforms, ensuring it's
                                easily accessible to readers across the globe. It's time to
                                share your story with the world!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box">
                            <img src="./_astro/pn6.E2CDahns_Z1uU3Sy.avif" alt="pn" width="65" height="59" loading="lazy"
                                decoding="async" />
                            <p>
                                <span> Author Copies: Hold Your Book in Your Hands </span>
                                There is nothing quite like the feeling you get when you hold
                                your published book for the first time. We'll arrange for
                                author copies to be printed and delivered so you can proudly
                                display your literary achievement.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="audio-cta">
            <div class="container-fluid">
                <div class="container">
                    <h3>
                        Are you ready to take the next step <br />
                        in your publishing journey?
                    </h3>
                    <p>Let's make your book a reality! Self Publish Your Masterpiece Now.</p>
                    <div class="btn-block">
                        <a href="javascript:" class="btn btn-yellow various isplay-n get-starteds expert"
                            data-bs-toggle="modal" data-bs-target=".exampleModal">
                            <span>
                                Claim Your Expert Consultation
                                <i class="fas fa-long-arrow-right"></i>
                            </span>
                        </a>
                        <a href="javascript:" onclick="$zopim.livechat.window.toggle();"
                            class="btn btn-white-brd chat display-n live-views">
                            <span>
                                Let's Talk!
                                <i class="fas fa-long-arrow-right"></i>
                            </span>
                        </a>
                        <a href="<?php echo PHONE_HREF; ?>" class="btn btn-white-brd chat live-views d-lg-none d-block"
                            style="
                  background: #fbcd1d;
                  color: #000;
                  width: 56%;
                  border-radius: 38px;
                  margin: auto;
                ">
                            <span> <?php echo PHONE; ?> </span>
                        </a>
                    </div>
                </div>
                <h5>
                    70
                    <span>%off</span>
                </h5>
            </div>
        </section>
        <section class="portfolio-sec">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="hd-txt">
                            <h2>Some of Our Published Works</h2>
                            <p>
                                At <?php echo WEBSITE_NAME; ?>, we have helped countless authors have
                                their books published and have made their word accessible all
                                across the globe. We assure to publish your work on renowned
                                platforms such as Amazon, Kindle, CreateSpace, etc. Many of
                                our published books have captured the bestselling spots; yours
                                can be the next, too!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-slider-st">
                            <div class="portfolio-slider1">
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-1.xf4roggk_ZrTsY.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-2.ES9F06PF_2iPgRo.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-3.aUmRIyg1_Z16S9lQ.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-4.MO2xo5fR_270C8A.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-5.bqJwR3V-_QBtLR.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-6.Z5dtb_tg_1RrGri.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="portfolio-slider-st">
                            <div class="portfolio-slider2">
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-7.OcBlkYgb_Z1pNYnl.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-8.yjWE8EmB_1rGKjx.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-9.Y3ot7cFG_Z1s3TDE.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-10.DWxivKG-_Z19zv9s.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-11.TETCbvkH_Z2anfTB.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                                <div>
                                    <div class="port-box">
                                        <img src="./_astro/port-12.G0OjHPIA_Z13EBPQ.avif" alt="portfolio" loading="lazy"
                                            width="332" height="393" decoding="async" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="why-choose">
            <div class="container">
                <div class="heading text-center">
                    <h3>Why Choose</h3>
                    <h2><span><?php echo WEBSITE_NAME; ?></span></h2>
                    <p>
                        Quality Assurance: We promise to deliver meticulously crafted
                        content that captures the essence of your story.
                    </p>
                </div>
                <div class="whychoose">
                    <div class="item">
                        <img src="./_astro/choose-1.jvdCg5ve_Z17ROJT.avif" alt="choose" width="148" height="148"
                            loading="lazy" decoding="async" />
                        <h4>Authenticity</h4>
                        <p>
                            Our writers will honor your unique voice and vision throughout
                            the ghostwriting process. By working closely with you to reflect
                            your individuality and stay true to your story.
                        </p>
                    </div>
                    <div class="item">
                        <img src="./_astro/choose-2.zC7lftP9_Z1VG6Q9.avif" alt="choose" width="148" height="148"
                            loading="lazy" decoding="async" />
                        <h4>Timely Delivery</h4>
                        <p>
                            Our efficient workflow & dedicated team will respect your
                            deadlines and provide regular updates on the progress of your
                            project.
                        </p>
                    </div>
                    <div class="item">
                        <img src="./_astro/choose-3.8LGfFF6K_ZrTs03.avif" alt="choose" width="148" height="148"
                            loading="lazy" decoding="async" />
                        <h4>Professionalism</h4>
                        <p>
                            We maintain the highest level of professionalism and
                            confidentiality.
                        </p>
                    </div>
                    <div class="item">
                        <img src="./_astro/choose-4.le6ID0zZ_1qDrq5.avif" alt="choose" width="148" height="148"
                            loading="lazy" decoding="async" />
                        <h4>Collaboration</h4>
                        <p>
                            We will involve you in the creative process, valuing your input
                            and feedback at every stage.
                        </p>
                    </div>
                    <div class="item">
                        <img src="./_astro/choose-5.8hM-tA5f_opfCl.avif" alt="choose" width="148" height="148"
                            loading="lazy" decoding="async" />
                        <h4>Customization</h4>
                        <p>
                            We tailor our services to meet your specific needs and goals.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="audio-cta">
            <div class="container-fluid">
                <div class="container">
                    <h3>
                        Are you ready to take the next step <br />
                        in your publishing journey?
                    </h3>
                    <p>Let's make your book a reality! Publish Your Masterpiece Now.</p>
                    <div class="btn-block">
                        <a href="javascript:" class="btn btn-yellow various isplay-n get-starteds expert"
                            data-bs-toggle="modal" data-bs-target=".exampleModal">
                            <span>
                                Claim Your Expert Consultation
                                <i class="fas fa-long-arrow-right"></i>
                            </span>
                        </a>
                        <a href="javascript:" onclick="$zopim.livechat.window.toggle();"
                            class="btn btn-white-brd chat display-n live-views">
                            <span>
                                Let's Talk!
                                <i class="fas fa-long-arrow-right"></i>
                            </span>
                        </a>
                        <a href="<?php echo PHONE_HREF; ?>" class="btn btn-white-brd chat live-views d-lg-none d-block"
                            style="
                  background: #fbcd1d;
                  color: #000;
                  width: 56%;
                  border-radius: 38px;
                  margin: auto;
                ">
                            <span> <?php echo PHONE; ?> </span>
                        </a>
                    </div>
                </div>
                <h5>
                    70
                    <span>%off</span>
                </h5>
            </div>
        </section>
        <section class="our-testimonial">
            <div class="container">
                <h2 class="zila">
                    REVIEWS FROM OUR CLIENTS <br />
                    See what our clients have to say about us!
                </h2>
                <div class="row autoplay3">
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="info-testi">
                                <p>
                                    “I’ve had several of my books ghostwritten, edited,
                                    formatted, designed, and published through <?php echo WEBSITE_NAME; ?>! They’ve
                                    taken my dreams of becoming a writer by
                                    profession and made it a reality and now all I have to do is
                                    come up with new book ideas.”
                                </p>
                                <h4>Arnold Moss</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="info-testi">
                                <p>
                                    “As a writer who writes a lot of books every month, I never
                                    have the time to edit my book let alone go after publishing
                                    agencies to notice my manuscript. <?php echo WEBSITE_NAME; ?> has
                                    taken a load off my back with their editing and publishing
                                    services!”
                                </p>
                                <h4>Lindsey Page</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="info-testi">
                                <p>
                                    “It’s not easy keeping up with readers’ demands for sequels
                                    to a book series you start. That’s why I outsource some of
                                    my writing projects to <?php echo WEBSITE_NAME; ?>! Their team is
                                    excellent with both the writing and the editing and they
                                    publish my work for me too!”
                                </p>
                                <h4>Gabriel Watts</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="frequently">
            <div class="container">
                <div class="heading text-center">
                    <h3>Frequently Asked Questions</h3>
                    <h2>Answering your <span>Common Questions</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-1">
                        <div class="faqs-wrapper">
                            <div class="accordion" id="faq">
                                <div class="card">
                                    <div class="card-header" id="faqhead1">
                                        <a href="javascript:" class="btn-header-link" data-bs-toggle="collapse"
                                            data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                            How much would it cost to hire <?php echo WEBSITE_NAME; ?>
                                            Services?
                                        </a>
                                    </div>
                                    <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                        <div class="card-body">
                                            <p>
                                                The cost depends on several factors, like the book
                                                size, type of book, format, number of pages, and other
                                                services you wish to utilize. You may contact us for a
                                                free estimate!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqhead2">
                                        <a href="javascript:" class="btn-header-link collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="true"
                                            aria-controls="faq2">Who will own the rights to my book?</a>
                                    </div>
                                    <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                        <div class="card-body">
                                            <p>
                                                You will! We may do all the work, but it was 100% your
                                                idea, and thus you get full ownership of your entire
                                                book!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqhead3">
                                        <a href="javascript:" class="btn-header-link collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="true"
                                            aria-controls="faq3">Can I trust you guys with my personal information?</a>
                                    </div>
                                    <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                        <div class="card-body">
                                            <p>
                                                We have worked with thousands of amazing aspiring
                                                authors like you, and we have gained their trust, and
                                                we’re confident that we’ll achieve yours, too!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqhead4">
                                        <a href="javascript:" class="btn-header-link collapsed" data-toggle="collapse"
                                            data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="true"
                                            aria-controls="faq4">Do you have customer support available?</a>
                                    </div>
                                    <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                        <div class="card-body">
                                            <p>
                                                Without customer support and constant communication,
                                                we won’t be able to write your book the way you want
                                                it. Our support team is available at your beck and
                                                call!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqhead5">
                                        <a href="javascript:" class="btn-header-link collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="true"
                                            aria-controls="faq5">How long will this project take?</a>
                                    </div>
                                    <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                        <div class="card-body">
                                            <p>
                                                The book writing process typically depends on the
                                                length of the book and the frequency of modifications;
                                                however, a 200-page book takes about 2-3 months.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqhead6">
                                        <a href="javascript:" class="btn-header-link collapsed"
                                            data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="true"
                                            aria-controls="faq6">Can I get my money back if I don’t like what I see?</a>
                                    </div>
                                    <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                        <div class="card-body">
                                            <p>
                                                You’re subject to 100% refundability if unsatisfied
                                                with the first chapter!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="all-genres">
            <div class="container">
                <div class="heading text-white text-center">
                    <h3>We Write</h3>
                    <h2>All <span>Genres</span> - What’s Yours?</h2>
                </div>
                <div class="row">
                    <div class="col-md-10 offset-1">
                        <ul>
                            <li>
                                <img src="./_astro/genres-check.nWO-RsKo_1dWfvb.avif" alt="genres" width="20"
                                    height="20" loading="lazy" decoding="async" />
                                Autobiography
                            </li>
                            <li>
                                <img src="./_astro/genres-check.nWO-RsKo_1dWfvb.avif" alt="genres" width="20"
                                    height="20" loading="lazy" decoding="async" />
                                Fiction
                            </li>
                            <li>
                                <img src="./_astro/genres-check.nWO-RsKo_1dWfvb.avif" alt="genres" width="20"
                                    height="20" loading="lazy" decoding="async" />
                                Non-Fiction
                            </li>
                            <li>
                                <img src="./_astro/genres-check.nWO-RsKo_1dWfvb.avif" alt="genres" width="20"
                                    height="20" loading="lazy" decoding="async" />
                                Children’s Book
                            </li>
                            <li>
                                <img src="./_astro/genres-check.nWO-RsKo_1dWfvb.avif" alt="genres" width="20"
                                    height="20" loading="lazy" decoding="async" />
                                Self-Help Book
                            </li>
                            <li>
                                <img src="./_astro/genres-check.nWO-RsKo_1dWfvb.avif" alt="genres" width="20"
                                    height="20" loading="lazy" decoding="async" />
                                Travelogue
                            </li>
                            <li>
                                <img src="./_astro/genres-check.nWO-RsKo_1dWfvb.avif" alt="genres" width="20"
                                    height="20" loading="lazy" decoding="async" />
                                Photobook
                            </li>
                            <li>
                                <img src="./_astro/genres-check.nWO-RsKo_1dWfvb.avif" alt="genres" width="20"
                                    height="20" loading="lazy" decoding="async" />
                                Other
                            </li>
                        </ul>
                        <form action="includes/sendmail/sendmail.php" method="POST" class="footer-form">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="required form-control" required name="name"
                                        placeholder="Full Name*" />
                                </div>
                                <div class="col-md-4">
                                    <input type="email" class="required form-control" required name="email"
                                        placeholder="Email Address*" />
                                </div>
                                <div class="col-md-4">
                                    <input type="tel" id="phones" class="required form-control ftpn" required
                                        name="phone" minlength="7" maxlength="14" placeholder="Phone Number*"
                                        pattern="[(]{1}[0-9]{3}[)]{1}[s]{1}[0-9]{3}[-]{1}[0-9]{4}"
                                        title="(000) 000-0000" />
                                </div>
                                <div class="col-md-12">
                                    <textarea autocomplete="nope" name="message" class="required form-control" required
                                        placeholder="Enter Brief*"></textarea>
                                    <button type="submit" class="btn btn-yellow call-now">
                                        <span>
                                            Claim Your Expert Consultation
                                            <i class="fas fa-long-arrow-right"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade popupform popupforms exampleModal" id tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24">
                                <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Get a Free Quote!</h2>
                        <p>
                            Discuss your book idea with our consultants and we'll help you
                            transform them to multi-million dollar reality.
                            <span>It's Free!</span>
                        </p>
                        <form action="includes/sendmail/sendmail.php" method="post" class="validate-popupform">
                            <!--hidden required values-->
                            <input type="hidden" name="ip_address" value="<?php echo $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo $currentFullURL ?>" />
                            <ul>
                                <li class="first">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <input type="text" class="required" required placeholder="Full Name *" name="name"
                                        aria-required="true" />
                                </li>
                                <li>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <input type="email" class="required email" required placeholder="Email Address *"
                                        name="email" aria-required="true" />
                                </li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <input type="tel" class="required number" id="phonepub" required
                                        placeholder="Phone No. *" name="phone" aria-required="true" />
                                </li>
                                <li>
                                    <div class="fld-inp">
                                        <select name="service" class="form-control" required>
                                            <option value>Select a genre:</option>
                                            <option value="Business">Business</option>
                                            <option value="Memoir / Biography">
                                                Memoir / Biography
                                            </option>
                                            <option value="Health / Wellness">
                                                Health / Wellness
                                            </option>
                                            <option value="Self-Help / Personal Development">
                                                Self-Help / Personal Development
                                            </option>
                                            <option value="General Nonfiction">
                                                General Nonfiction
                                            </option>
                                            <option value="Fiction">Fiction</option>
                                            <option value="Children's">Children's</option>
                                            <option value="Science / Technology">
                                                Science / Technology
                                            </option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group-select">
                                        <h5>Additional Services:</h5>
                                        <div class="d-flex align-items-center checkboxes justify-content-between mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="additionalservices[]" value="Book Cover" id="bookcover" />
                                                <label class="form-check-label" for="bookcover">Book Cover</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="additionalservices[]" value="Editing and Proofreading"
                                                    id="editing" />
                                                <label class="form-check-label" for="editing">Editing and
                                                    Proofreading</label>
                                            </div>
                                        </div>
                                    </div>
                                    <select name="genre" required class="form-control menuscript">
                                        <option value>Manuscript*</option>
                                        <option value=" Completed">Completed</option>
                                        <option value="In-progress">In-progress</option>
                                        <option value="Idea">Idea</option>
                                    </select>
                                </li>
                                <li style="display: inherit" class="w-100">
                                    <i class="fas fa-paper-plane-o" aria-hidden="true"></i>
                                    <textarea name="message" class="required" required placeholder="Enter a  description*"
                                        aria-required="true"></textarea>
                                </li>
                                <li>
                                    <input type="submit" value="Claim Your Expert Consultation" />
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="copyRigth">
            <div class="container">
                <div class="copyBox">
                    <div class="rightMenu">
                        <ul class="footerList">
                            <li>
                                <a href="/terms-conditions" class="leftList">TERMS
                                    AND CONDITIONS</a>
                            </li>
                            <li><a href="javascript:" class="leftList"> |</a></li>
                            <li>
                                <a href="/privacy-policy" class="leftList">PRIVACY
                                    POLICY</a>
                            </li>
                        </ul>
                    </div>
                    <div class="rightText">
                        <p class="leftList">
                            COPYRIGHT © 2024
                            <span class="copyColor"><?php echo WEBSITE_NAME; ?>.</span> ALL RIGHTS
                            RESERVED
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="whatsapp-chat">
            <ul class="list-unstyled p-0 d-flex align-items-center m-0">
                <li>
                    <span class="orText">OR</span>
                    <a href="<?php echo PHONE_HREF; ?>" class="footer-phone-number">
                        <img src="./_astro/call-now.PooATy_x_ZhiSDo.avif" alt="call-now" width="28" height="28"
                            loading="lazy" decoding="async" />
                        Call Now</a>
                </li>
                <li>
                    <a href="javascript:" target="_blank" data-bs-toggle="modal" data-bs-target=".exampleModal">
                        <img src="./_astro/pencil.webp" alt="whatsapp-chat" width="28" height="28" loading="lazy"
                            decoding="async" style="filter: invert(1)" />
                        Signup
                    </a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
        integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
        crossorigin="anonymous"></script>
    <!-- ZENDESK -->
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=6da4305e-ec20-4d26-87a7-f52f10e35132"> </script>
    <!-- ZENDESK -->
    <script>
    $(document).ready(() => {
        $(".portfolio-slider1").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            rtl: false,
            autoplay: true,
            autoplaySpeed: 1,
            speed: 7000,
            cssEase: "linear",
            waitForAnimate: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            arrows: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
        $(".portfolio-slider2").slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1,
            speed: 7000,
            cssEase: "linear",
            waitForAnimate: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            arrows: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
        $(".whychoose ").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            rtl: false,
            autoplay: true,
            autoplaySpeed: 1,
            speed: 7000,
            cssEase: "linear",
            waitForAnimate: false,
            pauseOnFocus: false,
            pauseOnHover: false,
            arrows: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    });
    </script>
    <script>
    var phoneInput = document.getElementById("phonepub");
    var myForm = document.forms.myForm;
    var result = document.getElementById("result");

    phoneInput.addEventListener("input", function(e) {
        var x = e.target.value
            .replace(/\D/g, "")
            .match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
        e.target.value = !x[2] ?
            x[1] :
            "(" + x[1] + ") " + x[2] + (x[3] ? "-" + x[3] : "");
    });
    </script>

</body>

</html>
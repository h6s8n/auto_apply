<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>
<body class="antialiased">
<div
    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
{{--                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
{{--        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">--}}
{{--            <img src="{{asset('logo\logo.jpg')}} " style="max-width: 400px;">--}}
{{--        </div>--}}

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;"
                             xml:space="preserve">
<path style="fill:#4DA3FF;" d="M321.451,346.863H190.547c-50.608,0-91.633,41.025-91.633,91.633v65.511h314.169v-65.511
	C413.084,387.889,372.058,346.863,321.451,346.863z"/>
                            <g>
                                <path style="fill:#85A1A6;"
                                      d="M155.77,92.035c-29.343,0-53.13,23.787-53.13,53.13v37.302h53.13V92.035L155.77,92.035z"/>
                                <path style="fill:#85A1A6;"
                                      d="M356.227,92.035c29.343,0,53.13,23.787,53.13,53.13v37.302h-53.13V92.035L356.227,92.035z"/>
                            </g>
                            <g>
                                <path style="fill:#F4C49D;" d="M137.886,151.37c-21.524,0-38.972,17.448-38.972,38.972l0,0c0,21.524,17.448,38.972,38.972,38.972
		h17.886V151.37H137.886z"/>
                                <path style="fill:#F4C49D;" d="M374.112,151.37c21.524,0,38.972,17.448,38.972,38.972l0,0c0,21.524-17.448,38.972-38.972,38.972
		h-17.886V151.37H374.112z"/>
                                <rect x="222.411" y="281.376" style="fill:#F4C49D;" width="67.171" height="76.144"/>
                            </g>
                            <path style="opacity:0.15;fill:#333333;enable-background:new    ;" d="M222.412,326.6c10.776,2.607,22.022,3.999,33.588,3.999
	c11.566,0,22.811-1.392,33.588-3.999v-50.06h-67.175L222.412,326.6L222.412,326.6z"/>
                            <path style="fill:#FCCDA2;" d="M255.999,7.993L255.999,7.993c-67.122,0-121.535,54.414-121.535,121.535v63.055
	c0,67.122,54.414,121.535,121.535,121.535l0,0c67.122,0,121.535-54.413,121.535-121.535v-63.055
	C377.534,62.406,323.121,7.993,255.999,7.993z"/>
                            <path style="opacity:0.1;fill:#333333;enable-background:new    ;" d="M154.357,192.583v-63.055
	c0-63.772,49.12-116.067,111.588-121.127c-3.281-0.265-6.597-0.407-9.946-0.407l0,0c-67.122,0-121.535,54.414-121.535,121.534
	v63.055c0,67.122,54.413,121.535,121.535,121.535l0,0c3.35,0,6.666-0.142,9.946-0.407
	C203.476,308.651,154.357,256.356,154.357,192.583z"/>
                            <g>
                                <path style="fill:#FFF9F2;"
                                      d="M155.77,353.713c-33.357,13.697-56.856,46.489-56.856,84.784v65.511h56.856V353.713z"/>
                                <path style="fill:#FFF9F2;"
                                      d="M356.227,353.713c33.357,13.697,56.856,46.489,56.856,84.784v65.511h-56.856V353.713z"/>
                                <path style="fill:#FFF9F2;" d="M256.002,459.547c0,0,53.454-75.019,79.525-111.607c-4.589-0.708-9.29-1.077-14.077-1.077H190.547
		c-4.785,0-9.483,0.37-14.07,1.076L256.002,459.547z"/>
                            </g>
                            <polygon style="fill:#FF99AA;" points="263.858,346.863 276.336,363.912 263.858,385.715 248.141,385.715 235.662,363.912
	248.141,346.863 "/>
                            <polygon style="fill:#FF8095;"
                                     points="274.917,432.992 263.858,385.715 248.141,385.715 237.081,432.992 256.002,459.547 "/>
                            <path style="fill:#85A1A6;" d="M255.999,253.706c43.056,29.574,70.123-7.83,70.123-7.83s-18.768,0.436-25.593-14.351
	C282.898,191.145,256,202.52,256,202.52s-26.898-11.374-44.529,29.005c-6.825,14.788-25.593,14.351-25.593,14.351
	S212.943,283.28,255.999,253.706z"/>
                            <g>
                                <path style="fill:#FFC78C;" d="M303.035,91.226h-94.073c-4.415,0-7.993-3.579-7.993-7.993s3.578-7.993,7.993-7.993h94.073
		c4.415,0,7.993,3.579,7.993,7.993S307.45,91.226,303.035,91.226z"/>
                                <path style="fill:#FFC78C;" d="M315.548,119.663H196.45c-4.415,0-7.993-3.579-7.993-7.993c0-4.414,3.578-7.993,7.993-7.993h119.098
		c4.415,0,7.993,3.579,7.993,7.993C323.541,116.084,319.962,119.663,315.548,119.663z"/>
                            </g>
                            <g>
                                <circle style="fill:#26150C;" cx="199.178" cy="173.538" r="15.734"/>
                                <circle style="fill:#26150C;" cx="313.144" cy="173.538" r="15.734"/>
                                <path style="fill:#26150C;" d="M420.727,434.259c-0.852-13.012-3.113-25.682-9.094-38.324c-4.228-8.934-9.753-17.261-16.429-24.555
		c-13.567-14.823-31.749-25.253-51.274-29.889c-15.143-3.596-30.752-2.623-46.191-2.623v-23.605
		c37.028-12.583,66.58-41.49,80.041-78.105c24.262-1.802,43.455-22.104,43.455-46.818c0-6.4-1.334-12.542-3.727-18.16v-27.018
		c0-25.281-15.319-47.594-38.527-56.792C361.746,37.065,313.202,0,256.161,0S150.575,37.065,133.338,88.373
		c-23.208,9.198-38.527,31.512-38.527,56.792v27.018c-2.392,5.617-3.727,11.76-3.727,18.16c0,24.715,19.193,45.016,43.455,46.818
		c13.463,36.615,43.015,65.521,80.041,78.105v23.605h-23.872c-27.253,0-54.247,11.724-72.852,31.641
		c-16.021,17.15-25.587,40.127-26.725,63.549c-0.812,16.713-0.049,33.662-0.049,50.398c0,6.516,0,13.032,0,19.548
		c0,4.415,3.579,7.993,7.993,7.993h56.857H356.39h56.857c4.414,0,7.993-3.578,7.993-7.993c0-14.452,0-28.905,0-43.357
		C421.238,451.643,421.292,442.877,420.727,434.259z M401.526,145.165v6.962c-3.732-2.662-7.852-4.771-12.221-6.255
		c-0.1-0.034-0.201-0.066-0.302-0.099c-0.555-0.184-1.114-0.362-1.677-0.525c-0.223-0.065-0.449-0.125-0.674-0.187
		c-0.322-0.088-0.641-0.185-0.964-0.267c0-11.743,0.273-23.509-1.526-35.153c-0.005-0.036-0.01-0.072-0.015-0.11
		C394.918,117.896,401.526,130.891,401.526,145.165z M383.298,219.211c0.898-2.802,1.445-10.977,1.577-12.159
		c1.058-9.455,0.813-18.978,0.813-28.474c0-1.41,0.974-16.62,0-17.006c0.067,0.027,0.134,0.054,0.2,0.081
		c0.637,0.261,1.266,0.537,1.881,0.839c0.015,0.007,0.029,0.014,0.044,0.021c10.327,5.084,17.439,15.778,17.439,27.829
		c0,14.145-9.532,26.107-22.51,29.801C382.941,220.087,383.126,219.747,383.298,219.211z M110.796,145.165
		c0-14.274,6.608-27.269,17.378-35.634c-0.005,0.036-0.01,0.074-0.015,0.11c-1.087,6.893-1.553,13.876-1.56,20.853
		c-0.001,1.201,0.601,14.158,0.034,14.301c-2.791,0.703-5.577,1.699-8.192,2.902c-1.032,0.474-7.646,3.288-7.646,4.431v-6.962
		H110.796z M107.069,190.341c0-12.051,7.111-22.744,17.439-27.829c0.015-0.007,0.029-0.014,0.044-0.021
		c0.615-0.302,1.244-0.578,1.881-0.839c0.067-0.028,0.133-0.054,0.2-0.081c0,19.177-1.224,38.618,2.732,57.526
		c0.072,0.347,0.136,0.697,0.212,1.044C116.601,216.449,107.069,204.487,107.069,190.341z M147.939,496.014h-40.872v-57.519
		c0-1.291,0.039-2.572,0.098-3.847c0.013-0.283,0.026-0.566,0.042-0.848c0.071-1.283,0.163-2.562,0.292-3.829
		c0.002-0.021,0.005-0.043,0.007-0.064c0.134-1.318,0.305-2.626,0.5-3.926c0.018-0.116,0.034-0.232,0.052-0.348
		c3.883-25.056,18.932-46.461,39.88-58.979v129.361H147.939z M320.947,354.855l-42.113,59.102l-6.316-27.002l10.917-19.074
		c1.568-2.739,1.377-6.145-0.488-8.691l-3.173-4.334h41.173V354.855z M259.384,377.722h-6.446l-7.598-13.276l7.019-9.589h7.607
		l7.019,9.589L259.384,377.722z M266.474,431.296l-10.311,14.475l-10.315-14.476l8.793-37.588h3.038L266.474,431.296z
		 M230.565,338.87v-19.292c0,1.359,20.374,2.434,22.265,2.482c9.69,0.246,19.42-0.577,28.926-2.482v19.292H230.565z
		 M147.156,224.126c-3.038-10.626-4.528-21.682-4.538-32.837c-0.009-10.736,0-21.473,0-32.209c0-2.517,0-5.034,0-7.552
		c0-19.702-0.379-40.001,6.148-58.866c4.993-14.43,12.876-27.788,23.105-39.126c20.833-23.088,50.744-36.866,81.851-37.524
		c0.813-0.017,1.625-0.026,2.438-0.026c31.635,0,62.286,13.557,83.662,36.861c12.053,13.141,20.892,29.15,25.694,46.318
		c4.185,14.96,4.185,29.991,4.185,45.367c0,2.332,0,4.663,0,6.995c0,20.319,1.556,40.842-1.862,60.989
		c-2.885,17.002-9.913,33.122-20.107,47.014c-10.743,14.641-24.949,26.716-41.22,34.8c-32.954,16.373-73.009,15.484-105.157-2.385
		c-18.682-10.384-34.391-26.014-44.712-44.744C152.591,239.844,149.438,232.106,147.156,224.126z M232.547,354.855l-3.173,4.334
		c-1.865,2.547-2.056,5.952-0.488,8.691l10.917,19.074l-6.315,26.994l-42.108-59.094h41.167V354.855z M348.396,496.014H163.925
		V359.28c2.986-1.012,6.044-1.868,9.169-2.542l65.862,92.432l10.699,15.015c0.375,0.526,0.808,0.999,1.286,1.412
		c1.437,1.239,3.284,1.943,5.223,1.943l0,0l0,0c0.248,0,0.493-0.022,0.739-0.045c0.074-0.006,0.148-0.004,0.222-0.013
		c0.264-0.032,0.524-0.085,0.782-0.143c0.051-0.012,0.103-0.016,0.155-0.028c0.166-0.04,0.326-0.1,0.488-0.15
		c0.137-0.044,0.279-0.078,0.416-0.128c0.053-0.02,0.103-0.048,0.156-0.069c1.407-0.561,2.649-1.511,3.552-2.778l76.559-107.446
		c3.124,0.672,6.179,1.528,9.163,2.541v136.733H348.396z M405.252,496.014h-40.872v-129.36
		c20.947,12.518,35.996,33.923,39.881,58.979c0.018,0.116,0.034,0.232,0.051,0.348c0.196,1.299,0.366,2.608,0.501,3.926
		c0.002,0.021,0.005,0.043,0.007,0.064c0.129,1.267,0.221,2.546,0.292,3.829c0.016,0.282,0.029,0.565,0.042,0.848
		c0.059,1.276,0.098,2.557,0.098,3.847V496.014z"/>
                                <path style="fill:#26150C;" d="M288.654,273.079c27.493,0,43.439-21.599,44.104-22.518c1.78-2.46,2.021-5.715,0.609-8.404
		c-1.412-2.687-4.232-4.343-7.253-4.273c-0.557,0-13.678-0.109-18.137-9.646c-5.773-13.185-19.011-35.189-43.029-35.189
		c-3.671,0-6.69,0.547-8.788,1.09c-2.096-0.545-5.116-1.09-8.787-1.09c-24.018,0-37.257,22.005-43.029,35.189
		c-4.46,9.535-17.58,9.646-18.12,9.647c-3.036-0.058-5.85,1.585-7.262,4.273c-1.413,2.688-1.18,5.944,0.601,8.405
		c0.666,0.919,16.614,22.513,44.102,22.516c0.003,0,0.003,0,0.006,0c10.719,0,21.627-3.316,32.489-9.867
		C267.023,269.763,277.932,273.079,288.654,273.079z M223.672,257.093c-0.001,0-0.003,0-0.004,0
		c-8.633-0.001-15.787-3.197-21.053-6.725c6.132-2.654,12.499-7.315,16.274-15.496c0.023-0.05,0.045-0.1,0.067-0.151
		c7.337-16.805,17.164-25.688,28.418-25.688c3.159,0,5.366,0.74,5.728,0.87c2.076,0.937,4.043,0.937,6.119,0
		c0.361-0.13,2.567-0.87,5.728-0.87c11.254,0,21.08,8.883,28.417,25.688c0.022,0.051,0.045,0.101,0.067,0.151
		c3.791,8.211,10.189,12.876,16.341,15.525c-5.24,3.516-12.392,6.695-21.119,6.695c-8.92,0-18.33-3.356-27.968-9.976
		c-2.727-1.873-6.325-1.873-9.051,0C241.997,253.738,232.589,257.093,223.672,257.093z"/>
                                <path style="fill:#26150C;" d="M209.123,91.227h94.073c4.414,0,7.993-3.578,7.993-7.993c0-4.415-3.579-7.993-7.993-7.993h-94.073
		c-4.415,0-7.993,3.578-7.993,7.993C201.131,87.649,204.709,91.227,209.123,91.227z"/>
                                <path style="fill:#26150C;" d="M196.611,119.663h119.098c4.414,0,7.993-3.578,7.993-7.993c0-4.415-3.579-7.993-7.993-7.993H196.611
		c-4.414,0-7.993,3.578-7.993,7.993C188.618,116.085,192.198,119.663,196.611,119.663z"/>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
</svg>
{{--                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"--}}
{{--                                                                             class="underline text-gray-900 dark:text-white">Documentation</a>--}}
{{--                        </div>--}}
                    </div>

                    <div class="ml-12">
{{--                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
{{--                            Create your professors list--}}
{{--                        </div>--}}
                    </div>
                </div>


                <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                            <path
                                d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        <div class="ml-4 text-lg leading-7 font-semibold">
                            <a href="{{route('professors.index')}}"
                               class="underline text-gray-900 dark:text-white">Professors</a></div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Welcome
                            <br>
                            Please click on Professors link , and Create your professors list.
                        </div>
                    </div>
                </div>

                {{--                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">--}}
                {{--                    <div class="flex items-center">--}}
                {{--                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
                {{--                             stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">--}}
                {{--                            <path--}}
                {{--                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>--}}
                {{--                        </svg>--}}
                {{--                        <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant--}}
                {{--                            Ecosystem--}}
                {{--                        </div>--}}
                {{--                    </div>--}}

                {{--                    <div class="ml-12">--}}
                {{--                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">--}}
                {{--                            Laravel's robust library of first-party tools and libraries, such as <a--}}
                {{--                                href="https://forge.laravel.com" class="underline">Forge</a>, <a--}}
                {{--                                href="https://vapor.laravel.com" class="underline">Vapor</a>, <a--}}
                {{--                                href="https://nova.laravel.com" class="underline">Nova</a>, and <a--}}
                {{--                                href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to--}}
                {{--                            the next level. Pair them with powerful open source libraries like <a--}}
                {{--                                href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a--}}
                {{--                                href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a--}}
                {{--                                href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a--}}
                {{--                                href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a--}}
                {{--                                href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a--}}
                {{--                                href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>

{{--        <div class="flex justify-center mt-4 sm:items-center sm:justify-between">--}}
{{--            <div class="text-center text-sm text-gray-500 sm:text-left">--}}
{{--                <div class="flex items-center">--}}
{{--                    <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"--}}
{{--                         stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">--}}
{{--                        <path--}}
{{--                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>--}}
{{--                    </svg>--}}

{{--                    <a href="https://laravel.bigcartel.com" class="ml-1 underline">--}}
{{--                        Shop--}}
{{--                    </a>--}}

{{--                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"--}}
{{--                         stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">--}}
{{--                        <path--}}
{{--                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>--}}
{{--                    </svg>--}}

{{--                    <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">--}}
{{--                        Sponsor--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">--}}
{{--                Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
</body>
</html>

<?php
/**
 *
 * Svg Icons
 *
 * @package True News
 */

/* ---------------------------------------------------------------------------------------------
   SVG ICONS CLASS
   Retrieve the SVG code for the specified icon. Based on a solution in TwentyNineteen.
   --------------------------------------------------------------------------------------------- */
if (!class_exists('True_News_SVG_Icons')) :
    class True_News_SVG_Icons
    {
        /* --------------------------------------------------------------------
           GET SVG CODE
           Get the SVG code for the specified icon
           -------------------------------------------------------------------- */
        public static function true_news_get_svg( $icon, $color = '#1A1A1B' )
        {
            $arr = apply_filters('true_news_svg_icons', self::$icons);
            if (array_key_exists($icon, $arr)) {
                $repl = '<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" ';
                $svg = preg_replace('/^<svg /', $repl, trim($arr[$icon])); // Add extra attributes to SVG code.
                $svg = str_replace('#1A1A1B', $color, $svg); // Replace the color.
                $svg = str_replace('#', '%23', $svg); // Urlencode hashes.
                $svg = preg_replace("/([\n\t]+)/", ' ', $svg); // Remove newlines & tabs.
                $svg = preg_replace('/>\s*</', '><', $svg); // Remove white space between SVG tags.
                return $svg;
            }
            return null;
        }

        /* --------------------------------------------------------------------
           ICON STORAGE
           Store the code for all SVGs in an array
           -------------------------------------------------------------------- */
        static $icons = array(
            'arrow-down' => '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16"><polygon fill="#1A1A1B" points="7.793 0 7.793 13.53 13.192 8.124 14.116 9.041 7.141 16 .182 9.041 1.083 8.124 6.489 13.53 6.489 0"/></svg>',
            'arrow-down-circled' => '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="#1A1A1B" d="M16,32 C7.163444,32 0,24.836556 0,16 C0,7.163444 7.163444,0 16,0 C24.836556,0 32,7.163444 32,16 C32,24.836556 24.836556,32 16,32 Z M16.7934656,8 L15.4886113,8 L15.4886113,21.5300971 L10.082786,16.1242718 L9.18181515,17.0407767 L16.1410384,24 L23.1157957,17.0407767 L22.1915239,16.1242718 L16.7934656,21.5300971 L16.7934656,8 Z"/></svg>',
            'bookmark' => '<svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18"><path fill="#1A1A1B" d="M12.598889,2.699762 C12.598889,2.20275 12.195981,1.799841 11.698969,1.799841 L2.699762,1.799841 C2.20275,1.799841 1.799841,2.20275 1.799841,2.699762 L1.799841,15.349777 L6.676297,11.866594 C6.989197,11.643094 7.409533,11.643094 7.722434,11.866594 L12.598889,15.349777 L12.598889,2.699762 Z M1.422989,17.830788 C0.82736,18.256238 0,17.830464 0,17.098493 L0,2.699762 C0,1.208725 1.208725,0 2.699762,0 L11.698969,0 C13.190006,0 14.398731,1.208725 14.398731,2.699762 L14.398731,17.098493 C14.398731,17.830464 13.571371,18.256238 12.975742,17.830788 L7.199365,13.704805 L1.422989,17.830788 Z"/></svg>',
            'calendar' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19"><path fill="#1A1A1B" d="M4.60069444,4.09375 L3.25,4.09375 C2.47334957,4.09375 1.84375,4.72334957 1.84375,5.5 L1.84375,7.26736111 L16.15625,7.26736111 L16.15625,5.5 C16.15625,4.72334957 15.5266504,4.09375 14.75,4.09375 L13.3993056,4.09375 L13.3993056,4.55555556 C13.3993056,5.02154581 13.0215458,5.39930556 12.5555556,5.39930556 C12.0895653,5.39930556 11.7118056,5.02154581 11.7118056,4.55555556 L11.7118056,4.09375 L6.28819444,4.09375 L6.28819444,4.55555556 C6.28819444,5.02154581 5.9104347,5.39930556 5.44444444,5.39930556 C4.97845419,5.39930556 4.60069444,5.02154581 4.60069444,4.55555556 L4.60069444,4.09375 Z M6.28819444,2.40625 L11.7118056,2.40625 L11.7118056,1 C11.7118056,0.534009742 12.0895653,0.15625 12.5555556,0.15625 C13.0215458,0.15625 13.3993056,0.534009742 13.3993056,1 L13.3993056,2.40625 L14.75,2.40625 C16.4586309,2.40625 17.84375,3.79136906 17.84375,5.5 L17.84375,15.875 C17.84375,17.5836309 16.4586309,18.96875 14.75,18.96875 L3.25,18.96875 C1.54136906,18.96875 0.15625,17.5836309 0.15625,15.875 L0.15625,5.5 C0.15625,3.79136906 1.54136906,2.40625 3.25,2.40625 L4.60069444,2.40625 L4.60069444,1 C4.60069444,0.534009742 4.97845419,0.15625 5.44444444,0.15625 C5.9104347,0.15625 6.28819444,0.534009742 6.28819444,1 L6.28819444,2.40625 Z M1.84375,8.95486111 L1.84375,15.875 C1.84375,16.6516504 2.47334957,17.28125 3.25,17.28125 L14.75,17.28125 C15.5266504,17.28125 16.15625,16.6516504 16.15625,15.875 L16.15625,8.95486111 L1.84375,8.95486111 Z"/></svg>',
            'chevron-down' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12"><polygon fill="#1A1A1B" fill-rule="evenodd" points="1319.899 365.778 1327.678 358 1329.799 360.121 1319.899 370.021 1310 360.121 1312.121 358" transform="translate(-1310 -358)"/></svg>',
            'blaze' => '<svg xmlns="http://www.w3.org/2000/svg"  width="22" height="22" viewBox="0 0 24 24"><path fill="#1A1A1B" d="M8.625 0c.61 7.189-5.625 9.664-5.625 15.996 0 4.301 3.069 7.972 9 8.004 5.931.032 9-4.414 9-8.956 0-4.141-2.062-8.046-5.952-10.474.924 2.607-.306 4.988-1.501 5.808.07-3.337-1.125-8.289-4.922-10.378zm4.711 13c3.755 3.989 1.449 9-1.567 9-1.835 0-2.779-1.265-2.769-2.577.019-2.433 2.737-2.435 4.336-6.423z"/></svg>',
            'star' => '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="#1A1A1B" d="M24,9l-19.655,15l2.821,-8.866l-7.166,-6.134l9.153,0l2.846,-9l2.853,9l9.148,0Zm-4.216,15l-6.361,-4.429l3.872,-2.96l2.489,7.389Z"></path></svg>',
            'latest' => '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><path fill="#1A1A1B" d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 14h-7v-8h2v6h5v2z"/></svg>',
            'comment' => '<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19"><path fill="#1A1A1B" d="M9.43016863,13.2235931 C9.58624731,13.094699 9.7823475,13.0241935 9.98476849,13.0241935 L15.0564516,13.0241935 C15.8581553,13.0241935 16.5080645,12.3742843 16.5080645,11.5725806 L16.5080645,3.44354839 C16.5080645,2.64184472 15.8581553,1.99193548 15.0564516,1.99193548 L3.44354839,1.99193548 C2.64184472,1.99193548 1.99193548,2.64184472 1.99193548,3.44354839 L1.99193548,11.5725806 C1.99193548,12.3742843 2.64184472,13.0241935 3.44354839,13.0241935 L5.76612903,13.0241935 C6.24715123,13.0241935 6.63709677,13.4141391 6.63709677,13.8951613 L6.63709677,15.5301903 L9.43016863,13.2235931 Z M3.44354839,14.766129 C1.67980032,14.766129 0.25,13.3363287 0.25,11.5725806 L0.25,3.44354839 C0.25,1.67980032 1.67980032,0.25 3.44354839,0.25 L15.0564516,0.25 C16.8201997,0.25 18.25,1.67980032 18.25,3.44354839 L18.25,11.5725806 C18.25,13.3363287 16.8201997,14.766129 15.0564516,14.766129 L10.2979143,14.766129 L6.32072889,18.0506004 C5.75274472,18.5196577 4.89516129,18.1156602 4.89516129,17.3790323 L4.89516129,14.766129 L3.44354839,14.766129 Z"/></svg>',
            'cross' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><polygon fill="#1A1A1B" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102"/></svg>',
            'edit' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path fill="#1A1A1B" d="M14.7272727,11.1763636 C14.7272727,10.7244943 15.0935852,10.3581818 15.5454545,10.3581818 C15.9973239,10.3581818 16.3636364,10.7244943 16.3636364,11.1763636 L16.3636364,15.5454545 C16.3636364,16.9010626 15.2646989,18 13.9090909,18 L2.45454545,18 C1.09893743,18 0,16.9010626 0,15.5454545 L0,4.09090909 C0,2.73530107 1.09893743,1.63636364 2.45454545,1.63636364 L6.82363636,1.63636364 C7.2755057,1.63636364 7.64181818,2.00267611 7.64181818,2.45454545 C7.64181818,2.9064148 7.2755057,3.27272727 6.82363636,3.27272727 L2.45454545,3.27272727 C2.00267611,3.27272727 1.63636364,3.63903975 1.63636364,4.09090909 L1.63636364,15.5454545 C1.63636364,15.9973239 2.00267611,16.3636364 2.45454545,16.3636364 L13.9090909,16.3636364 C14.3609602,16.3636364 14.7272727,15.9973239 14.7272727,15.5454545 L14.7272727,11.1763636 Z M6.54545455,9.33890201 L6.54545455,11.4545455 L8.66109799,11.4545455 L16.0247344,4.09090909 L13.9090909,1.97526564 L6.54545455,9.33890201 Z M14.4876328,0.239639906 L17.7603601,3.51236718 C18.07988,3.83188705 18.07988,4.34993113 17.7603601,4.669451 L9.57854191,12.8512692 C9.42510306,13.004708 9.21699531,13.0909091 9,13.0909091 L5.72727273,13.0909091 C5.27540339,13.0909091 4.90909091,12.7245966 4.90909091,12.2727273 L4.90909091,9 C4.90909091,8.78300469 4.99529196,8.57489694 5.14873082,8.42145809 L13.330549,0.239639906 C13.6500689,-0.0798799688 14.1681129,-0.0798799688 14.4876328,0.239639906 Z"/></svg>',
            'folder' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19"><path fill="#1A1A1B" d="M2.8,1.85 C2.275329,1.85 1.85,2.27532949 1.85,2.8 L1.85,15.4 C1.85,15.9246705 2.275329,16.35 2.8,16.35 L17.2,16.35 C17.724671,16.35 18.15,15.9246705 18.15,15.4 L18.15,5.5 C18.15,4.97532949 17.724671,4.55 17.2,4.55 L9.1,4.55 C8.8158,4.55 8.550403,4.40796403 8.392757,4.17149517 L6.845094,1.85 L2.8,1.85 Z M17.2,2.85 C18.663555,2.85 19.85,4.03644541 19.85,5.5 L19.85,15.4 C19.85,16.8635546 18.663555,18.05 17.2,18.05 L2.8,18.05 C1.336445,18.05 0.15,16.8635546 0.15,15.4 L0.15,2.8 C0.15,1.33644541 1.336445,0.15 2.8,0.15 L7.3,0.15 C7.5842,0.15 7.849597,0.292035965 8.007243,0.528504833 L9.554906,2.85 L17.2,2.85 Z"/></svg>',
            'search' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path fill="#1A1A1B" d="M1148.0319,95.6176858 L1151.70711,99.2928932 C1152.09763,99.6834175 1152.09763,100.316582 1151.70711,100.707107 C1151.31658,101.097631 1150.68342,101.097631 1150.29289,100.707107 L1146.61769,97.0318993 C1145.07801,98.2635271 1143.12501,99 1141,99 C1136.02944,99 1132,94.9705627 1132,90 C1132,85.0294372 1136.02944,81 1141,81 C1145.97056,81 1150,85.0294372 1150,90 C1150,92.1250137 1149.26353,94.078015 1148.0319,95.6176858 Z M1146.04139,94.8563911 C1147.25418,93.5976949 1148,91.8859456 1148,90 C1148,86.1340067 1144.86599,83 1141,83 C1137.13401,83 1134,86.1340067 1134,90 C1134,93.8659933 1137.13401,97 1141,97 C1142.88595,97 1144.59769,96.2541764 1145.85639,95.0413859 C1145.88271,95.0071586 1145.91154,94.9742441 1145.94289,94.9428932 C1145.97424,94.9115423 1146.00716,94.8827083 1146.04139,94.8563911 Z" transform="translate(-1132 -81)"/></svg>',
            'tag' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><path fill="#1A1A1B" d="M15.4496399,8.42490555 L8.66109799,1.63636364 L1.63636364,1.63636364 L1.63636364,8.66081885 L8.42522727,15.44178 C8.57869221,15.5954158 8.78693789,15.6817418 9.00409091,15.6817418 C9.22124393,15.6817418 9.42948961,15.5954158 9.58327627,15.4414581 L15.4486339,9.57610048 C15.7651495,9.25692435 15.7649133,8.74206554 15.4496399,8.42490555 Z M16.6084423,10.7304545 L10.7406818,16.59822 C10.280287,17.0591273 9.65554997,17.3181054 9.00409091,17.3181054 C8.35263185,17.3181054 7.72789481,17.0591273 7.26815877,16.5988788 L0.239976954,9.57887876 C0.0863319284,9.4254126 0,9.21716044 0,9 L0,0.818181818 C0,0.366312477 0.366312477,0 0.818181818,0 L9,0 C9.21699531,0 9.42510306,0.0862010512 9.57854191,0.239639906 L16.6084423,7.26954545 C17.5601275,8.22691012 17.5601275,9.77308988 16.6084423,10.7304545 Z M5,6 C4.44771525,6 4,5.55228475 4,5 C4,4.44771525 4.44771525,4 5,4 C5.55228475,4 6,4.44771525 6,5 C6,5.55228475 5.55228475,6 5,6 Z"/></svg>',
            'user' => '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20"><path fill="#1A1A1B" d="M18,19 C18,19.5522847 17.5522847,20 17,20 C16.4477153,20 16,19.5522847 16,19 L16,17 C16,15.3431458 14.6568542,14 13,14 L5,14 C3.34314575,14 2,15.3431458 2,17 L2,19 C2,19.5522847 1.55228475,20 1,20 C0.44771525,20 0,19.5522847 0,19 L0,17 C0,14.2385763 2.23857625,12 5,12 L13,12 C15.7614237,12 18,14.2385763 18,17 L18,19 Z M9,10 C6.23857625,10 4,7.76142375 4,5 C4,2.23857625 6.23857625,0 9,0 C11.7614237,0 14,2.23857625 14,5 C14,7.76142375 11.7614237,10 9,10 Z M9,8 C10.6568542,8 12,6.65685425 12,5 C12,3.34314575 10.6568542,2 9,2 C7.34314575,2 6,3.34314575 6,5 C6,6.65685425 7.34314575,8 9,8 Z"/></svg>',
        );
    }
endif;

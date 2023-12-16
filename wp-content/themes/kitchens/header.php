<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kitchens
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
    <div class="container flex a-center ">
        <ul class="menu flex all-center space-b">
            <li class="socials flex gap">
                <a href="https://www.facebook.com/mtc_home_kitchens" class="btn small transparent" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M279.1 288l14.2-92.7h-88.9v-60.1c0-25.4 12.4-50.1 52.2-50.1h40.4V6.3S260.4 0 225.4 0c-73.2 0-121.1 44.4-121.1 124.7v70.6H22.9V288h81.4v224h100.2V288z" fill="currentColor"/></svg>
                </a>
                <a href="https://twitter.com/mtc_home_kitchens" class="btn small transparent" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" fill="currentColor"/></svg>
                </a>
                <a href="https://instagram.com/mtc_home_kitchens" class="btn small transparent" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" fill="currentColor"/></svg>
                </a>
            </li>
            <li>
                <ul class="center-links flex all-center">
                    <li class="page-links">
                        <a href="/shop" rel="nofollow">shop</a>
                        <a href="/plan-my-kitchen" rel="nofollow">plan my kitchen</a>
                    </li>
                    <li><a class="logo a-center" href="/">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" loading='lazy' alt="MTC Home Kitchens" width="84" height="33">
                    </a></li>
                    <li class="page-links">
                        <a href="/about" rel="nofollow">about us</a>
                        <a href="/pricing" rel="nofollow">gallery</a>
                    </li>
                </ul>
            </li>
           
            <li class="manage flex space-b a-center">
                <a href="/signup" class="order btn small transparent">my order
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" fill="none"><path d="M.076.154c-.101.204-.101.708 0 .911.079.138.173.155 1.136.155H2.27c.024.08.439 2.252.893 4.658l.83 4.374-.164.228c-.713 1 .04 2.495 1.27 2.52.376.008 1.01-.334 1.23-.675.321-.488.384-1.162.156-1.618-.062-.13.047-.138 1.74-.138h1.81l-.094.179c-.141.268-.118 1.032.031 1.333.415.83 1.277 1.13 2.06.724.886-.464 1.145-1.675.51-2.423a.63.63 0 0 1-.102-.39c.024-.163-.031-.293-.172-.44l-.196-.203H4.958l-.118-.61-.117-.609h7.744c.146 0 .255-.179.255-.179.184-.238.267-.48.784-2.992.54-2.585.521-2.816.47-3.024-.041-.167-.1-.289-.306-.35-.008-.016-2.115 0-5.014 0H3.485l-.102-.61C3.226.017 3.195 0 1.526 0 .256 0 .155.008.076.154ZM12.79 2.846c-.059.294-.2 1.056-.427 2.13l-.408 1.934H4.495l-.337-1.813c-.18-.991-.352-1.902-.376-2.032l-.039-.22h9.046ZM5.357 10.82c.455.22.431.935-.039 1.13-.494.211-.98-.293-.783-.805.148-.357.47-.488.822-.325Zm6.268 0c.455.22.431.935-.039 1.13-.494.211-.98-.293-.783-.805.148-.357.47-.488.822-.325Z" fill="currentColor"/></svg>
                </a>
                <a class="burger column">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </a>

                <ul class="dropdown">
                    <a href="/shop" rel="nofollow">shop</a>
                    <a href="/plan-my-kitchen" rel="nofollow">plan my kitchen</a>
                    <a href="/about" rel="nofollow">about us</a>
                    <a href="/pricing" rel="nofollow">gallery</a>
                </ul>
            </li>
        </ul>
        <!-- <div class="dropdown container" style="display: none;">
            <li class="mob-dropdown">
                <a class="back-to-menu link services flex all-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="13" viewBox="0 0 11 13" fill="none">
                        <path d="M7.5 10.8799L3.5 6.87988L7.5 2.87988" stroke="currentColor"/>
                    </svg>    
                    Menu
                </a>
            </li>
            <li class="mob-dropdown">
                <a class="services-title link flex all-center">
                    All Services
                </a>
            </li>
            <div class="links-wrap flex column">
                <span class="dropdown-titles flex a-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path d="M21.9514 1.625H8.54096C8.4744 1.625 8.40785 1.625 8.3413 1.65841H8.30802C8.24147 1.69181 8.20819 1.69181 8.14164 1.72522C8.10836 1.72522 8.10836 1.75863 8.07509 1.75863C8.00853 1.79203 7.97526 1.85885 7.9087 1.89225L3.44966 7.20393C3.38311 7.27074 3.34983 7.33755 3.31655 7.43778C3.31655 7.47118 3.31655 7.50459 3.28328 7.50459C3.28328 7.5714 3.25 7.60481 3.25 7.67162V23.5732C3.25 24.0075 3.61604 24.375 4.04863 24.375H21.9514C22.384 24.375 22.75 24.0075 22.75 23.5732V2.42676C22.75 1.99247 22.384 1.625 21.9514 1.625ZM7.74232 4.63161V6.93667H5.77901L7.74232 4.63161ZM21.1527 22.8049H4.84727V8.5402H8.50768C8.94027 8.5402 9.30631 8.17272 9.30631 7.73844V3.22852H21.1527V22.8049Z" fill="#3F61FE"/>
                        <path d="M7.28987 10.5625C6.86203 10.5625 6.5 10.8895 6.5 11.2759C6.5 11.6623 6.86203 11.9893 7.28987 11.9893H18.7101C19.138 11.9893 19.5 11.6623 19.5 11.2759C19.5 10.8895 19.138 10.5625 18.7101 10.5625H7.28987ZM18.6772 14.0107H7.28987C6.86203 14.0107 6.5 14.3377 6.5 14.7241C6.5 15.1105 6.86203 15.4375 7.28987 15.4375H18.7101C19.138 15.4375 19.5 15.1105 19.5 14.7241C19.4671 14.3377 19.138 14.0107 18.6772 14.0107Z" fill="#3F61FE"/>
                    </svg>Services
                </span>
                <ul class="flex links">
                    <li><a href="/write-my-essay.html" class="link">Write my essay</a></li>
                    <li><a href="/buy-online.html" class="link">Buy essay online</a></li>
                    <li><a href="/samples/" class="link">Essay examples</a></li>
                    <li><a href="/custom-coursework.html" class="link">Custom coursework</a></li>
                    <li><a href="/creative-writing-services.html" class="link">Creative writing</a></li>
                    <li><a href="/custom-admission-essays.html" class="link">Custom admission essay</a></li>
                    <li><a href="/order-custom-essay.html" class="link">Order custom essay</a></li>
                    <li><a href="/college-essay-writers.html" class="link">College essay writers</a></li>
                    <li><a href="/ib-extended-essay.html" class="link">IB extended essays</a></li>
                    <li><a href="/student-essays.html" class="link">Essays for students</a></li>
                    <li><a href="/buy-speech.html" class="link">Buy speech online</a></li>
                    <li><a href="/pay-for-essays.html" class="link">Pay for essays</a></li>
                    <li><a href="/college-essay-papers.html" class="link">College papers</a></li>
                    <li><a href="/do-my-homework.html" class="link">Do my homework</a></li>
                    <li><a href="/write-my-paper.html" class="link">Write my paper</a></li>
                    <li><a href="/custom-dissertation.html" class="link">Custom dissertation</a></li>
                    <li><a href="/buy-research-papers.html" class="link">Buy research paper</a></li>
                    <li><a href="/research-paper-topics.html" class="link">Research topics</a></li>
                    <li><a href="/buy-articles-online.html" class="link">Buy article</a></li>
                    <li><a href="/writers.html" class="link">Essay writers</a></li>
                    <li><a href="/buy-dissertation-online.html" class="link">Buy dissertation</a></li>
                    <li><a href="/write-my-dissertation.html" class="link">Write my dissertation</a></li>
                    <li><a href="/cheap-essays.html" class="link">Essay for cheap</a></li>
                    <li><a href="/essays-for-sale-online.html" class="link">Essays for sale</a></li>
                    <li><a href="/plagiarism-free-essays.html" class="link">Non-plagiarized essays</a></li>
                    <li><a href="/buy-coursework-online.html" class="link">Buy coursework</a></li>
                    <li><a href="/term-paper-help.html" class="link">Term paper help</a></li>
                    <li><a href="/essay-topics-and-ideas.html" class="link">Essay Ideas &amp; topics</a></li>
                    <li><a href="/buy-assignments-online.html" class="link">Buy assignment</a></li>
                    <li><a href="/custom-thesis.html" class="link">Custom thesis</a></li>
                    <li><a href="/custom-research-paper.html" class="link">Custom research paper</a></li>
                    <li><a href="/custom-college-papers.html" class="link">College paper</a></li>
                    <li><a href="/grammar-checker.html" class="link">Grammar checker</a></li>
                    <li><a href="/coursework-writing-help.html" class="link">Coursework writing</a></li>
                    <li><a href="/edit-my-essay.html" class="link">Edit my essay</a></li>
                    <li><a href="/custom-law-essays.html" class="link">Law essays</a></li>
                    <li><a href="/mba-essay.html" class="link">MBA essays</a></li>
                    <li><a href="/nurse-essays.html" class="link">Nurse essays</a></li>
                    <li><a href="/business-management.html" class="link">Business essays</a></li>
                    <li><a href="/custom-term-paper.html" class="link">Custom term paper</a></li>
                    <li><a href="/blog/" class="link" class="link">Blog</a></li>
                    <li><a href="/review.html" class="link">Review</a></li>
                    <li><a href="/buy-college-essays.html" class="link">Buy college essays</a></li>
                </ul>

                <span class="dropdown-titles flex a-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <g clip-path="url(#clip0_97_636)">
                        <path d="M16.5874 25.7251C15.8097 25.6873 15.0416 25.5372 14.3069 25.2794C13.7672 25.0869 13.2058 24.9621 12.6354 24.9079C12.0903 24.9363 11.5498 25.0235 11.0234 25.1679C9.924 25.4354 8.66857 25.7399 7.49486 25.2125C6.32115 24.6851 5.71943 23.5485 5.19943 22.5456C4.9677 22.051 4.67578 21.587 4.33029 21.1639C3.92181 20.7709 3.465 20.4314 2.97086 20.1536C2.02 19.5668 0.950289 18.8982 0.512003 17.7468C0.0737175 16.5954 0.400575 15.3771 0.742289 14.3148C0.927873 13.7693 1.04515 13.2029 1.09143 12.6285C1.07095 12.0826 0.983635 11.5412 0.831432 11.0165C0.564003 9.91707 0.259432 8.66907 0.78686 7.48793C1.39322 6.44706 2.33276 5.641 3.45372 5.19993C3.9487 4.96588 4.4128 4.67145 4.83543 4.32336C5.22607 3.91558 5.56535 3.46154 5.84572 2.97136C6.43257 1.98336 7.10115 0.913643 8.26 0.475357C9.41886 0.0370717 10.6223 0.401072 11.692 0.742786C12.2314 0.936022 12.7929 1.06081 13.3634 1.11421C13.9092 1.08719 14.4501 0.997462 14.9754 0.846786C16.0749 0.586786 17.3303 0.282215 18.504 0.809643C19.5438 1.40907 20.3522 2.3404 20.7994 3.45421C21.0312 3.94881 21.3231 4.41289 21.6686 4.83593C22.0863 5.23102 22.5532 5.57058 23.0577 5.84621C24.0086 6.43307 25.0783 7.10164 25.5166 8.25307C25.9549 9.4045 25.5909 10.6228 25.2714 11.6925C25.0789 12.2321 24.9542 12.7936 24.9 13.3639C24.9205 13.9099 25.0078 14.4512 25.16 14.9759C25.4274 16.0754 25.732 17.3234 25.2046 18.5045C24.6771 19.6782 23.5406 20.2799 22.5377 20.8074C22.0418 21.0409 21.5755 21.3327 21.1486 21.6765C20.7586 22.0967 20.4218 22.5632 20.1457 23.0656C19.5589 24.0165 18.8903 25.0862 17.7389 25.5245C17.3707 25.6619 16.9803 25.7299 16.5874 25.7251ZM12.5686 23.0285H12.6874C13.4219 23.0823 14.1462 23.2321 14.8417 23.4742C15.5448 23.789 16.3243 23.8922 17.0851 23.7714C17.6497 23.5634 18.0954 22.8354 18.5709 22.0702C18.933 21.4301 19.3748 20.8386 19.8857 20.3096C20.4308 19.8489 21.0324 19.4595 21.676 19.1508C22.4204 18.8729 23.0628 18.3756 23.5183 17.7245C23.704 16.9516 23.6496 16.1405 23.3623 15.3994C23.1609 14.721 23.0486 14.0193 23.028 13.3119C23.0818 12.5774 23.2316 11.8532 23.4737 11.1576C23.7885 10.4545 23.8917 9.67501 23.7709 8.91422C23.5554 8.34964 22.8349 7.90393 22.0697 7.4285C21.4296 7.0664 20.8381 6.62459 20.3091 6.11364C19.8536 5.56769 19.4692 4.96612 19.1651 4.32336C18.8848 3.58034 18.388 2.93856 17.7389 2.48107C16.9665 2.29582 16.1562 2.34759 15.4137 2.62964C14.7329 2.84334 14.0249 2.95841 13.3114 2.97136C12.5711 2.91033 11.8419 2.753 11.1423 2.50336C10.442 2.19693 9.6675 2.10142 8.91372 2.2285C8.34915 2.44393 7.90343 3.1645 7.428 3.92964C7.06485 4.56451 6.62308 5.15104 6.11315 5.67536C5.56803 6.13612 4.96642 6.52554 4.32286 6.83421C3.57984 7.11452 2.93806 7.61138 2.48057 8.2605C2.29532 9.03287 2.34709 9.84314 2.62915 10.5856C2.83873 11.2675 2.95371 11.9748 2.97086 12.6879C2.90983 13.4282 2.7525 14.1574 2.50286 14.8571C2.19644 15.5574 2.10092 16.3319 2.228 17.0856C2.44343 17.6502 3.164 18.0959 3.92915 18.5714C4.56922 18.9335 5.1608 19.3753 5.68972 19.8862C6.14527 20.4322 6.52968 21.0337 6.83372 21.6765C7.11402 22.4195 7.61089 23.0613 8.26 23.5188C9.03319 23.7007 9.8432 23.6464 10.5851 23.3628C11.2308 23.1738 11.8966 23.0616 12.5686 23.0285Z" fill="#3F61FE"/>
                        <path d="M11.5891 16.5433C11.4695 16.5448 11.3509 16.5225 11.2399 16.4779C11.129 16.4333 11.028 16.3671 10.9428 16.2833L8.2685 13.661C8.18168 13.5762 8.11242 13.475 8.06469 13.3634C8.01695 13.2518 7.99167 13.1318 7.99029 13.0104C7.98891 12.889 8.01146 12.7685 8.05665 12.6558C8.10183 12.5431 8.16877 12.4404 8.25364 12.3536C8.33851 12.2668 8.43966 12.1975 8.55129 12.1498C8.66293 12.1021 8.78287 12.0768 8.90428 12.0754C9.02569 12.074 9.14618 12.0966 9.25887 12.1418C9.37156 12.1869 9.47425 12.2539 9.56107 12.3388L11.5965 14.3296L16.4474 9.70904C16.5341 9.61792 16.6385 9.54539 16.7542 9.49586C16.8699 9.44633 16.9944 9.42083 17.1203 9.4209C17.2461 9.42097 17.3706 9.44662 17.4862 9.49629C17.6019 9.54595 17.7062 9.6186 17.7929 9.70982C17.8795 9.80104 17.9468 9.90892 17.9905 10.0269C18.0342 10.1449 18.0535 10.2706 18.0471 10.3963C18.0408 10.5219 18.009 10.645 17.9536 10.758C17.8982 10.871 17.8205 10.9716 17.7251 11.0536L12.2279 16.2536C12.1458 16.3416 12.047 16.4125 11.9374 16.4622C11.8278 16.5119 11.7094 16.5395 11.5891 16.5433Z" fill="#3F61FE"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_97_636">
                        <rect width="26" height="26" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>Top Queries
                </span>
                <ul class="flex queries">
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                    <li><a href="" class="link">Lorem ipsum dolor</a></li>
                </ul>
            </div>
        </div> -->
    </div>
</header>

	
<main>

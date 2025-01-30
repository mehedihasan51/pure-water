@extends('frontend.app')

@section('title', 'Pure Water')

@section('content')

{{-- Banner section start --}}
<div class="bi-home-banner-section"> 
    <!-- <video id="myVideo" class="banner-video" autoplay muted loop>
     <source src="./assets/video/indexBanner.mov" type="video/mp4" />
   </video> -->
   <video id="myVideo" class="banner-video" autoplay muted loop playsinline webkit-playsinline>
     <source src="./frontend/pure-water/assets/video/indexBanner.mov" type="video/mp4" />
 </video>
   <div class="bi-banner-content">
     <div class="container bi-banner-content-container">
       <!-- top logo -->
        <a href="index.html">
          <svg class="mobile--logo" xmlns="http://www.w3.org/2000/svg" width="109" height="87" viewBox="0 0 109 87" fill="none">
            <path
              d="M38.2447 35.1764C39.8826 41.4457 45.7158 47.184 53.9053 47.184C61.9706 47.184 65.3114 42.6978 65.4119 42.5584C60.1169 46.647 54.0235 45.653 50.5142 44.125C47.0107 42.594 41.7334 36.8587 41.4436 30.8919C41.1598 24.9282 42.8746 21.2283 42.8746 21.2283C43.0402 22.4477 43.7704 23.7414 44.752 24.9786C44.752 24.9786 44.7549 24.9816 44.7638 24.9905C44.7845 25.0142 44.7993 25.035 44.82 25.0587C46.7062 27.4057 49.4735 29.5449 50.9902 30.5863C53.3258 32.1826 55.28 34.761 54.0265 36.6985C52.7759 38.6359 48.8556 37.9209 46.1563 34.5681C46.0055 34.3782 45.8577 34.1883 45.7217 33.9955C43.1377 30.4113 43.0313 26.4859 43.0313 26.4859C42.3217 31.0492 44.4238 34.9716 46.2834 37.2207C48.3766 39.7456 53.4293 42.1934 56.4212 40.2055C59.4103 38.2146 59.7 34.8322 58.2513 32.058C56.8026 29.2838 51.1587 26.8894 47.5488 23.7414C43.9389 20.5933 43.6551 15.5553 43.6551 15.5553C38.9691 23.2043 36.6039 28.9011 38.2447 35.1764Z"
              fill="#00CD78" />
            <path
              d="M70.2108 28.6934C69.5397 25.5097 67.8959 21.8662 65.4154 17.5818C59.736 7.76973 54.0772 0.485626 54.0772 0.485626C54.0772 0.485626 49.5982 6.74016 47.842 9.25325C47.8065 9.30369 47.774 9.35117 47.7385 9.40161C46.5204 11.1551 45.938 13.2706 46.0799 15.4039C46.0829 15.4455 46.3845 19.4925 49.1429 21.9018C50.4585 23.0471 52.1496 24.136 53.7845 25.1893C56.5873 26.9903 59.2363 28.6934 60.4012 30.9275C62.5801 35.1052 61.4951 39.7545 57.761 42.2379C57.2643 42.5702 56.744 42.8195 56.203 43.0064C57.6546 43.0835 60.3953 42.8284 63.2956 41.6149C68.3867 39.4875 71.352 34.1023 70.2108 28.6934Z"
              fill="#29BBEE" />
            <path
              d="M71.6 42.9441C70.855 42.7394 70.11 42.6266 69.3502 42.6177C70.2282 43.2527 72.762 44.5107 72.7738 45.5877C72.4633 46.2434 71.6592 46.5787 71.0058 46.9081C69.7936 47.4659 68.4425 47.908 67.0825 48.3589C65.7196 48.8129 64.33 49.2461 62.9316 49.8247C66.0537 50.3231 72.7531 49.709 74.3259 46.4838C75.0887 44.6383 73.1315 43.309 71.6 42.9441Z"
              fill="#29BBEE" />
            <path
              d="M37.275 46.7627C36.6984 46.4482 35.711 46.0061 35.9091 45.297C36.5418 44.0152 38.2151 43.3535 39.4776 42.6177C37.8633 42.8432 35.7878 43.1992 34.7708 44.7332C33.9046 46.1396 35.3207 47.6528 36.456 48.267C39.9122 50.1985 43.9803 50.6465 47.8474 50.7979C50.047 50.8424 52.2466 50.7148 54.4167 50.3113C52.2466 49.9018 50.1061 49.6081 47.9804 49.2698C44.3558 48.6378 40.6483 48.2136 37.275 46.7627Z"
              fill="#29BBEE" />
            <path
              d="M6.58707 57.7704C8.09192 57.7704 9.28339 58.1947 10.1703 59.0433C11.0543 59.8919 11.4978 61.0104 11.4978 62.399C11.4978 63.8143 11.0425 64.9507 10.1319 65.8052C9.2213 66.6597 7.9914 67.087 6.44811 67.087H3.29353V71.1933H0V57.7734H6.58707V57.7704ZM6.20864 64.3217C6.84724 64.3217 7.34984 64.1525 7.71645 63.8113C8.08305 63.4701 8.26635 63.0132 8.26635 62.4406C8.26635 61.8917 8.08009 61.4496 7.70758 61.1083C7.33506 60.7671 6.83541 60.598 6.21159 60.598H3.29649V64.3246H6.20864V64.3217Z"
              fill="#4E626D" />
            <path
              d="M23.2706 71.1905H20.0776V70.2291C19.2794 71.0718 18.2535 71.4901 17.0029 71.4901C15.8321 71.4901 14.8919 71.1044 14.1794 70.3389C13.4669 69.5704 13.1121 68.5587 13.1121 67.3036V61.1351H16.2844V66.6242C16.2844 67.2116 16.4441 67.6893 16.7634 68.0573C17.0827 68.4252 17.4966 68.6091 18.0022 68.6091C18.6555 68.6091 19.1641 68.3777 19.5277 67.9178C19.8943 67.4579 20.0776 66.7518 20.0776 65.8053V61.1351H23.2706V71.1905Z"
              fill="#4E626D" />
            <path
              d="M32.9502 61.0758L32.8112 64.2802H32.2318C29.9287 64.2802 28.7786 65.5353 28.7786 68.0454V71.1905H25.5856V61.1351H28.7786V63.0578C29.6034 61.6811 30.7535 60.9957 32.2318 60.9957C32.4949 60.9957 32.7373 61.0224 32.9502 61.0758Z"
              fill="#4E626D" />
            <path
              d="M44.0634 66.9832H36.7194C36.8525 67.5855 37.1127 68.0573 37.497 68.4044C37.8843 68.7516 38.3426 68.9237 38.8747 68.9237C39.874 68.9237 40.5836 68.5379 41.0093 67.7635L43.8446 68.3451C43.4189 69.3865 42.7773 70.1698 41.9199 70.6979C41.0625 71.2261 40.0455 71.4901 38.8747 71.4901C37.3965 71.4901 36.1459 70.9917 35.1229 69.9977C34.097 69.0038 33.5856 67.725 33.5856 66.1613C33.5856 64.6125 34.097 63.3367 35.1229 62.3338C36.1488 61.331 37.4054 60.8325 38.8954 60.8325C40.3471 60.8325 41.5622 61.3191 42.5467 62.2953C43.5312 63.2714 44.0368 64.5591 44.0634 66.1613V66.9832ZM37.5975 63.8589C37.1984 64.1408 36.9264 64.5265 36.7786 65.022H40.9118C40.7639 64.4998 40.5126 64.1081 40.1519 63.8411C39.7912 63.5741 39.3744 63.4405 38.8954 63.4405C38.4283 63.4376 37.9967 63.58 37.5975 63.8589Z"
              fill="#4E626D" />
            <path
              d="M64.679 71.1905H61.146L58.9109 62.8976L56.6551 71.1905H53.1428L49.3319 57.7705H52.7052L55.0409 66.2236L57.3351 57.7705H60.469L62.7662 66.2236L65.1018 57.7705H68.4959L64.679 71.1905Z"
              fill="#4E626D" />
            <path
              d="M79.4054 71.1905H76.2124V70.3894C75.3994 71.1252 74.3616 71.4901 73.0992 71.4901C71.7422 71.4901 70.5862 70.9917 69.6342 69.9977C68.6822 69.0038 68.2062 67.725 68.2062 66.1613C68.2062 64.6125 68.6822 63.3367 69.6342 62.3338C70.5862 61.331 71.7392 60.8325 73.0992 60.8325C74.3616 60.8325 75.3994 61.2004 76.2124 61.9333V61.1322H79.4054V71.1905ZM75.4851 68.0365C75.97 67.5499 76.2154 66.9239 76.2154 66.1643C76.2154 65.4166 75.9729 64.7965 75.4851 64.301C75.0002 63.8055 74.4237 63.5592 73.7585 63.5592C73.0519 63.5592 72.4754 63.8025 72.023 64.2891C71.5707 64.7757 71.3431 65.4018 71.3431 66.1613C71.3431 66.9357 71.5677 67.5647 72.023 68.0454C72.4754 68.5261 73.0549 68.7664 73.7585 68.7664C74.4237 68.7664 74.9973 68.5231 75.4851 68.0365Z"
              fill="#4E626D" />
            <path
              d="M89.1443 70.7513C88.2248 71.2439 87.3142 71.4931 86.4095 71.4931C85.1441 71.4931 84.1626 71.1519 83.4648 70.4724C82.7671 69.793 82.4182 68.7961 82.4182 67.4876V63.6809H80.603V61.1381H82.4182V58.174H85.6113V61.1381H88.5648V63.6809H85.6113V67.1672C85.6113 68.1433 86.0577 68.6299 86.9476 68.6299C87.4532 68.6299 87.938 68.4964 88.4051 68.2293L89.1443 70.7513Z"
              fill="#4E626D" />
            <path
              d="M99.9796 66.9832H92.6357C92.7687 67.5855 93.0289 68.0573 93.4133 68.4044C93.7976 68.7516 94.2588 68.9237 94.791 68.9237C95.7873 68.9237 96.4998 68.5379 96.9256 67.7635L99.7609 68.3451C99.3351 69.3865 98.6936 70.1698 97.8362 70.6979C96.9788 71.2261 95.9618 71.4901 94.791 71.4901C93.3128 71.4901 92.0622 70.9917 91.0392 69.9977C90.0163 69.0038 89.5018 67.725 89.5018 66.1613C89.5018 64.6125 90.0133 63.3367 91.0392 62.3338C92.0651 61.331 93.3216 60.8325 94.8117 60.8325C96.2633 60.8325 97.4784 61.3191 98.463 62.2953C99.4475 63.2714 99.953 64.5591 99.9796 66.1613V66.9832ZM93.5138 63.8589C93.1147 64.1408 92.8427 64.5265 92.6948 65.022H96.828C96.6802 64.4998 96.4289 64.1081 96.0712 63.8411C95.7134 63.5741 95.2906 63.4405 94.8146 63.4405C94.3446 63.4376 93.9129 63.58 93.5138 63.8589Z"
              fill="#4E626D" />
            <path
              d="M109 61.0758L108.861 64.2802H108.282C105.979 64.2802 104.829 65.5353 104.829 68.0454V71.1905H101.636V61.1351H104.829V63.0578C105.653 61.6811 106.804 60.9957 108.282 60.9957C108.545 60.9957 108.787 61.0224 109 61.0758Z"
              fill="#4E626D" />
            <path d="M20.631 85.8745V76.8725H22.0649V85.8745H20.631Z" fill="#4E626D" />
            <path
              d="M29.8018 79.8069C30.2926 80.332 30.538 81.0085 30.538 81.8423V85.8745H29.1307V82.1241C29.1307 81.5782 28.9858 81.1391 28.6961 80.8068C28.4064 80.4745 28.025 80.3083 27.5519 80.3083C26.937 80.3083 26.4521 80.519 26.1003 80.9403C25.7485 81.3616 25.5711 81.9788 25.5711 82.7947V85.8715H24.1786V79.2075H25.5711V80.0264C26.1328 79.3529 26.9015 79.0176 27.8742 79.0176C28.6665 79.0206 29.3111 79.2817 29.8018 79.8069Z"
              fill="#4E626D" />
            <path
              d="M38.1035 79.8069C38.5943 80.332 38.8397 81.0085 38.8397 81.8423V85.8745H37.4324V82.1241C37.4324 81.5782 37.2875 81.1391 36.9978 80.8068C36.7081 80.4745 36.3267 80.3083 35.8536 80.3083C35.2387 80.3083 34.7538 80.519 34.402 80.9403C34.0502 81.3616 33.8728 81.9788 33.8728 82.7947V85.8715H32.4803V79.2075H33.8728V80.0264C34.4345 79.3529 35.2032 79.0176 36.1759 79.0176C36.9712 79.0206 37.6128 79.2817 38.1035 79.8069Z"
              fill="#4E626D" />
            <path
              d="M46.3048 80.0354C46.9877 80.6851 47.3277 81.5219 47.3277 82.5425C47.3277 83.5632 46.9847 84.3999 46.2959 85.0556C45.607 85.7084 44.7703 86.0377 43.7799 86.0377C42.7806 86.0377 41.9351 85.7113 41.2432 85.0556C40.5514 84.3999 40.2055 83.5632 40.2055 82.5425C40.2055 81.5219 40.5514 80.6851 41.2432 80.0354C41.9351 79.3856 42.7806 79.0622 43.7799 79.0622C44.7792 79.0622 45.6218 79.3856 46.3048 80.0354ZM45.3202 84.1863C45.7578 83.762 45.9766 83.2131 45.9766 82.5395C45.9766 81.866 45.7578 81.3171 45.3202 80.8928C44.8827 80.4685 44.3712 80.2549 43.7799 80.2549C43.1738 80.2549 42.6535 80.4685 42.2189 80.8928C41.7872 81.3171 41.5685 81.866 41.5685 82.5395C41.5685 83.2101 41.7843 83.759 42.2189 84.1863C42.6535 84.6135 43.1709 84.8242 43.7799 84.8242C44.3712 84.8242 44.8827 84.6135 45.3202 84.1863Z"
              fill="#4E626D" />
            <path
              d="M52.1502 85.8745H50.6631L47.8101 79.1957H49.3238L51.4111 84.207L53.4984 79.1957H55.0121L52.1502 85.8745Z"
              fill="#4E626D" />
            <path
              d="M62.5425 85.8745H61.15V85.109C60.5439 85.7469 59.7397 86.0644 58.7404 86.0644C57.8387 86.0644 57.0641 85.735 56.4166 85.0763C55.7692 84.4177 55.4469 83.5721 55.4469 82.5425C55.4469 81.5218 55.7721 80.6792 56.4255 80.0146C57.0759 79.3499 57.8476 79.0206 58.7404 79.0206C59.7397 79.0206 60.5439 79.3381 61.15 79.976V79.2105H62.5425V85.8745ZM60.4936 84.1862C60.9312 83.7619 61.15 83.213 61.15 82.5395C61.15 81.866 60.9312 81.3171 60.4936 80.8928C60.0561 80.4685 59.5475 80.2549 58.9681 80.2549C58.3443 80.2549 57.8269 80.4626 57.4159 80.878C57.005 81.2963 56.801 81.8482 56.801 82.5365C56.801 83.2249 57.0079 83.7797 57.4159 84.1951C57.8269 84.6105 58.3443 84.8212 58.9681 84.8212C59.5475 84.8241 60.0561 84.6135 60.4936 84.1862Z"
              fill="#4E626D" />
            <path
              d="M69.0757 85.5511C68.5051 85.8923 67.9552 86.0614 67.429 86.0614C66.6869 86.0614 66.1045 85.8537 65.6758 85.4383C65.2471 85.02 65.0342 84.4087 65.0342 83.6047V80.3676H63.6003V79.2134H65.0342V77.1424H66.4267V79.2134H68.7032V80.3676H66.4267V83.5127C66.4267 83.9162 66.5243 84.2218 66.7224 84.4325C66.9205 84.6431 67.1865 84.747 67.5265 84.747C67.9109 84.747 68.2863 84.6253 68.65 84.385L69.0757 85.5511Z"
              fill="#4E626D" />
            <path
              d="M71.6331 76.5876C71.8045 76.7568 71.8873 76.9644 71.8873 77.2048C71.8873 77.457 71.8045 77.6617 71.639 77.8219C71.4734 77.9821 71.2605 78.0652 71.0033 78.0652C70.7432 78.0652 70.5303 77.9851 70.3588 77.8219C70.1903 77.6617 70.1046 77.454 70.1046 77.2048C70.1046 76.9615 70.1903 76.7568 70.3588 76.5876C70.5273 76.4185 70.7432 76.3325 71.0033 76.3325C71.2546 76.3325 71.4645 76.4185 71.6331 76.5876ZM70.3086 85.8745V79.2105H71.7011V85.8745H70.3086Z"
              fill="#4E626D" />
            <path
              d="M79.4329 80.0354C80.1159 80.6851 80.4559 81.5219 80.4559 82.5425C80.4559 83.5632 80.1129 84.3999 79.4241 85.0556C78.7352 85.7084 77.8985 86.0377 76.9051 86.0377C75.9059 86.0377 75.0603 85.7113 74.3685 85.0556C73.6767 84.3999 73.3307 83.5632 73.3307 82.5425C73.3307 81.5219 73.6767 80.6851 74.3685 80.0354C75.0603 79.3856 75.9059 79.0622 76.9051 79.0622C77.9074 79.0622 78.75 79.3856 79.4329 80.0354ZM78.4484 84.1863C78.886 83.762 79.1048 83.2131 79.1048 82.5395C79.1048 81.866 78.886 81.3171 78.4484 80.8928C78.0109 80.4685 77.4994 80.2549 76.9081 80.2549C76.302 80.2549 75.7817 80.4685 75.3471 80.8928C74.9125 81.3171 74.6966 81.866 74.6966 82.5395C74.6966 83.2101 74.9125 83.759 75.3471 84.1863C75.7787 84.6135 76.2991 84.8242 76.9081 84.8242C77.4994 84.8242 78.0109 84.6135 78.4484 84.1863Z"
              fill="#4E626D" />
            <path
              d="M87.6341 79.8069C88.1249 80.332 88.3703 81.0085 88.3703 81.8423V85.8745H86.9659V82.1241C86.9659 81.5782 86.8211 81.1391 86.5313 80.8068C86.2416 80.4745 85.8602 80.3083 85.3872 80.3083C84.7693 80.3083 84.2874 80.519 83.9326 80.9403C83.5778 81.3616 83.4034 81.9788 83.4034 82.7947V85.8715H82.0109V79.2075H83.4034V80.0264C83.9651 79.3529 84.7338 79.0176 85.7065 79.0176C86.5018 79.0206 87.1433 79.2817 87.6341 79.8069Z"
              fill="#4E626D" />
            <path d="M109 80.6287H94.1879V81.7645H109V80.6287Z" fill="#29BBEE" />
            <path d="M14.812 80.6287H0V81.7645H14.812V80.6287Z" fill="#29BBEE" />
          </svg>
        </a>
       <div class="bi-banner-headings">
         <h1 class="bi-headline-text">
           Providing Safe And Sustainable Hydration Across The World
         </h1>
         <p class="bi-banner-subheading">
           Pure, Fresh, and Responsible Sourced
         </p>
         <div class="bi-banner-btns">
           <a href="#" class="bi-banner-schedule-btn">
             Start Appointment Scheduling
           </a>
           <a href="#" class="bi-banner-play-btn">
             <span>Learn More</span>
             <svg class="playbtnIndex" xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
               <g filter="url(#filter0_b_22044_389)">
                 <path
                   d="M20.45 36.6667C29.6547 36.6667 37.1167 29.2048 37.1167 20C37.1167 10.7953 29.6547 3.33334 20.45 3.33334C11.2452 3.33334 3.78333 10.7953 3.78333 20C3.78333 29.2048 11.2452 36.6667 20.45 36.6667Z"
                   fill="#D9D9D9" fill-opacity="0.16" />
                 <path
                   d="M20.45 36.6667C29.6547 36.6667 37.1167 29.2048 37.1167 20C37.1167 10.7953 29.6547 3.33334 20.45 3.33334C11.2452 3.33334 3.78333 10.7953 3.78333 20C3.78333 29.2048 11.2452 36.6667 20.45 36.6667Z"
                   stroke="#161C24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
               </g>
               <path
                 d="M15.0667 20.3833V17.6C15.0667 14.1333 17.5167 12.7167 20.5167 14.45L22.9333 15.85L25.35 17.25C28.35 18.9833 28.35 21.8167 25.35 23.55L22.9333 24.95L20.5167 26.35C17.5167 28.0833 15.0667 26.6667 15.0667 23.2V20.3833Z"
                 fill="#161C24" stroke="#161C24" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                 stroke-linejoin="round" />
               <defs>
                 <filter id="filter0_b_22044_389" x="-0.966675" y="-1.41666" width="42.8334" height="42.8333"
                   filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                   <feFlood flood-opacity="0" result="BackgroundImageFix" />
                   <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                   <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_22044_389" />
                   <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_22044_389" result="shape" />
                 </filter>
               </defs>
             </svg>
           </a>
         </div>

       </div>
     </div>
     <div class="bi-banner-bottom-container">
       <div class="container bi-banner-bottom-contents">
         <div class="bottom-content-box">
           <p class="bottom-text">
             Lorem Ipsum is simply dummy text of the printing and
             typesetting industry. Lorem Ipsum has been.
           </p>
           <p class="bottom-text">
             Lorem Ipsum is simply dummy text of the printing and
             typesetting industry. Lorem Ipsum has been.
           </p>
         </div>
         <div class="bottom-social-icons">
           <a href="#" class="social-icon">
             <svg xmlns="http://www.w3.org/2000/svg" width="30" height="2" viewBox="0 0 30 2" fill="none">
               <path d="M1 1L29 1" stroke="#637381" stroke-width="2" stroke-linecap="round" />
             </svg>
             <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
               <g clip-path="url(#clip0_21824_1313)">
                 <path
                   d="M29.1723 0H10.8276C4.85718 0 0 4.85718 0 10.8276V29.1726C0 35.1427 4.85718 39.9999 10.8276 39.9999H29.1726C35.1427 39.9999 39.9999 35.1427 39.9999 29.1726V10.8276C39.9999 4.85718 35.1427 0 29.1723 0ZM37.6549 29.1726C37.6549 33.8497 33.8497 37.6549 29.1723 37.6549H10.8276C6.15022 37.6549 2.345 33.8497 2.345 29.1726V10.8276C2.345 6.15022 6.15022 2.345 10.8276 2.345H29.1726C33.8497 2.345 37.6549 6.15022 37.6549 10.8276V29.1726Z"
                   fill="#637381" />
                 <path
                   d="M19.9997 9.06301C13.9688 9.06301 9.0625 13.9693 9.0625 20.0002C9.0625 26.0311 13.9688 30.9374 19.9997 30.9374C26.0306 30.9374 30.9369 26.0311 30.9369 20.0002C30.9369 13.9693 26.0306 9.06301 19.9997 9.06301ZM19.9997 28.5924C15.2622 28.5924 11.4075 24.7381 11.4075 20.0002C11.4075 15.2627 15.2622 11.408 19.9997 11.408C24.7376 11.408 28.5919 15.2627 28.5919 20.0002C28.5919 24.7381 24.7376 28.5924 19.9997 28.5924ZM31.1984 5.17871C29.4162 5.17871 27.9666 6.62863 27.9666 8.41051C27.9666 10.1928 29.4162 11.6426 31.1984 11.6426C32.9807 11.6426 34.4305 10.1928 34.4305 8.41059C34.4305 6.6284 32.9806 5.17871 31.1984 5.17871ZM31.1984 9.29738C30.7095 9.29738 30.3116 8.89941 30.3116 8.41051C30.3116 7.92137 30.7095 7.52371 31.1984 7.52371C31.6876 7.52371 32.0855 7.92137 32.0855 8.41051C32.0855 8.89941 31.6876 9.29738 31.1984 9.29738Z"
                   fill="#637381" />
               </g>
               <defs>
                 <clipPath id="clip0_21824_1313">
                   <rect width="40" height="40" fill="white" />
                 </clipPath>
               </defs>
             </svg>
             <svg xmlns="http://www.w3.org/2000/svg" width="30" height="2" viewBox="0 0 30 2" fill="none">
               <path d="M1 1L29 1" stroke="#637381" stroke-width="2" stroke-linecap="round" />
             </svg>
           </a>
         </div>
       </div>
     </div>
   </div>
 </div>
 <!-- banner section ends -->

 <!-- private use section starts -->
 <div class="bi-common-section bi-home-private-use-section">
   <svg width="250" height="438" viewBox="0 0 250 438" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path
       d="M-64.5706 301.635C-50.3742 355.974 0.184189 405.71 71.1658 405.71C141.071 405.71 170.028 366.826 170.899 365.618C125.004 401.055 72.1909 392.44 41.7738 379.196C11.408 365.926 -34.3329 316.216 -36.8441 264.5C-39.3042 212.809 -24.4416 180.741 -24.4416 180.741C-23.0066 191.31 -16.6771 202.523 -8.16959 213.247C-8.16959 213.247 -8.14395 213.272 -8.06707 213.35C-7.8877 213.555 -7.75956 213.735 -7.58019 213.941C8.76866 234.283 32.7538 252.825 45.8995 261.851C66.1434 275.687 83.0816 298.034 72.2165 314.827C61.3771 331.62 27.3981 325.423 4.00235 296.363C2.69547 294.717 1.41421 293.071 0.235451 291.4C-22.1609 260.334 -23.0835 226.311 -23.0835 226.311C-29.2335 265.863 -11.014 299.86 5.10422 319.354C23.2468 341.238 67.0402 362.455 92.9729 345.224C118.88 327.969 121.391 298.652 108.835 274.607C96.2785 250.562 47.3601 229.808 16.0718 202.523C-15.2165 175.238 -17.6765 131.571 -17.6765 131.571C-58.2924 197.868 -78.7925 247.244 -64.5706 301.635Z"
       fill="#161C24" fill-opacity="0.03" />
     <path
       d="M212.489 245.444C206.672 217.85 192.424 186.27 170.925 149.135C121.699 64.0901 72.6522 0.955688 72.6522 0.955688C72.6522 0.955688 33.8301 55.1664 18.6087 76.9483C18.3012 77.3855 18.0193 77.797 17.7118 78.2342C7.15428 93.4327 2.10609 111.769 3.3361 130.259C3.36172 130.619 5.97553 165.696 29.8838 186.578C41.287 196.505 55.9445 205.943 70.1152 215.072C94.4079 230.682 117.368 245.444 127.464 264.808C146.35 301.017 136.946 341.315 104.581 362.84C100.276 365.72 95.7661 367.881 91.0767 369.501C103.659 370.169 127.413 367.958 152.551 357.44C196.678 339.001 222.38 292.325 212.489 245.444Z"
       fill="#161C24" fill-opacity="0.03" />
     <path
       d="M224.532 368.961C218.075 367.186 211.617 366.209 205.032 366.132C212.642 371.635 234.603 382.539 234.706 391.874C232.015 397.558 225.045 400.464 219.382 403.318C208.875 408.153 197.165 411.985 185.377 415.894C173.564 419.828 161.52 423.583 149.399 428.598C176.46 432.918 234.526 427.595 248.159 399.641C254.77 383.645 237.806 372.124 224.532 368.961Z"
       fill="#161C24" fill-opacity="0.03" />
     <path
       d="M-72.9752 402.058C-77.9721 399.332 -86.5309 395.5 -84.814 389.354C-79.3302 378.244 -64.8263 372.51 -53.8844 366.132C-67.8757 368.086 -85.8646 371.172 -94.6797 384.468C-102.188 396.658 -89.9134 409.773 -80.0733 415.096C-50.1175 431.838 -14.8573 435.721 18.6604 437.033C37.7255 437.418 56.7906 436.313 75.5995 432.815C56.7906 429.266 38.2381 426.72 19.8136 423.789C-11.6029 418.311 -43.7369 414.634 -72.9752 402.058Z"
       fill="#161C24" fill-opacity="0.03" />
   </svg>

   <div class="container bi-conmmon-container">
     <svg class="lines" xmlns="http://www.w3.org/2000/svg" width="1116" height="2" viewBox="0 0 1116 2" fill="none">
       <path d="M1 1H1115" stroke="#DFE3E8" stroke-width="2" stroke-linecap="round" />
     </svg>
     <div class="bi-home-private-use-contents">
       <div class="bi-common-section-content-headings">
         <h4 class="bi-common-section-content-heading">For Private Use</h4>
         <p class="bi-common-section-content-subheading">
           Lorem Ipsum is simply dummy text of the printing and typesetting
           industry.
         </p>
       </div>

       <div class="common-card-gallery">
         <!-- card -->
          <a href="">
            <div class="bi-common-card">
              <img src="{{asset('frontend/pure-water/assets/images/private-use-1.png')}}" alt="" srcset="" class="bi-common-card-img" />
              <div class="bi-common-card-bottom">
                <div class="bi-common-card-info">
                  <span class="bi-common-card-name">
                    Artesia 24 Naturpur Premium
                  </span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17.5538 6.42266L2.14431 21.8321" stroke="#02CC78" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M9.01675 6.44003L17.5544 6.42165L17.5367 14.96" stroke="#02CC78" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
            </div>
          </a>
         <!-- card -->
          <a href="">
            <div class="bi-common-card">
              <img src="{{asset('frontend/pure-water/assets/images/private-use-2.png')}}" alt="" srcset="" class="bi-common-card-img" />
              <div class="bi-common-card-bottom">
                <div class="bi-common-card-info">
                  <span class="bi-common-card-name">
                    Artesia 24 Naturpur Premium
                  </span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17.5538 6.42266L2.14431 21.8321" stroke="#02CC78" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M9.01675 6.44003L17.5544 6.42165L17.5367 14.96" stroke="#02CC78" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
            </div>
          </a>
         <!-- card -->
          <a href="">
            <div class="bi-common-card">
              <img src="{{asset('frontend/pure-water/assets/images/private-use-3.png')}}" alt="" srcset="" class="bi-common-card-img" />
              <div class="bi-common-card-bottom">
                <div class="bi-common-card-info">
                  <span class="bi-common-card-name">
                    Artesia 24 Naturpur Premium
                  </span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17.5538 6.42266L2.14431 21.8321" stroke="#02CC78" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M9.01675 6.44003L17.5544 6.42165L17.5367 14.96" stroke="#02CC78" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
            </div>
          </a>
         <!-- card -->
          <a href="">
            <div class="bi-common-card">
              <img src="{{asset('frontend/pure-water/assets/images/private-use-4.png')}}" alt="" srcset="" class="bi-common-card-img" />
              <div class="bi-common-card-bottom">
                <div class="bi-common-card-info">
                  <span class="bi-common-card-name">
                    Artesia 24 Naturpur Premium
                  </span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17.5538 6.42266L2.14431 21.8321" stroke="#02CC78" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M9.01675 6.44003L17.5544 6.42165L17.5367 14.96" stroke="#02CC78" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
            </div>
          </a>
         <!-- card  -->
          <a href="shop.html">
            <div class="bi-common-card">
              <img src="{{asset('frontend/pure-water/assets/images/private-use-5.png')}}" alt="" srcset="" class="bi-common-card-img" />
              <div class="bi-common-card-bottom">
                <div class="bi-common-card-info">
                  <span class="bi-common-card-name">
                    Artesia 24 Naturpur Premium
                  </span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17.5538 6.42266L2.14431 21.8321" stroke="#02CC78" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M9.01675 6.44003L17.5544 6.42165L17.5367 14.96" stroke="#02CC78" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
            </div>
          </a>
         <!-- card  -->
          <a href="shop.html">
            <div class="bi-common-card">
              <img src="{{asset('frontend/pure-water/assets/images/private-use-6.png')}}" alt="" srcset="" class="bi-common-card-img" />
              <div class="bi-common-card-bottom">
                <div class="bi-common-card-info">
                  <span class="bi-common-card-name">
                    Artesia 24 Naturpur Premium
                  </span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17.5538 6.42266L2.14431 21.8321" stroke="#02CC78" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                    <path d="M9.01675 6.44003L17.5544 6.42165L17.5367 14.96" stroke="#02CC78" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
              </div>
            </div>
          </a>
       </div>
     </div>
     <svg class="lines" xmlns="http://www.w3.org/2000/svg" width="1116" height="2" viewBox="0 0 1116 2" fill="none">
       <path d="M1 1H1115" stroke="#DFE3E8" stroke-width="2" stroke-linecap="round" />
     </svg>
   </div>
 </div>
 <!-- private use section ends -->

 <!-- property management section starts -->
 <div class="bi-common-section bi-home-property-section">
   <svg width="240" height="437" viewBox="0 0 240 437" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path
       d="M32.4294 301.144C46.6257 355.483 97.1842 405.219 168.166 405.219C238.071 405.219 267.028 366.336 267.899 365.127C222.004 400.565 169.191 391.949 138.774 378.705C108.408 365.436 62.6671 315.725 60.1558 264.009C57.6958 212.319 72.5584 180.25 72.5584 180.25C73.9934 190.82 80.3228 202.032 88.8304 212.756C88.8304 212.756 88.856 212.782 88.9329 212.859C89.1123 213.065 89.2404 213.244 89.4198 213.45C105.769 233.792 129.754 252.334 142.899 261.36C163.143 275.196 180.082 297.544 169.216 314.337C158.377 331.13 124.398 324.932 101.002 295.872C99.6955 294.226 98.4142 292.58 97.2354 290.909C74.8391 259.843 73.9165 225.82 73.9165 225.82C67.7665 265.372 85.986 299.37 102.104 318.863C120.247 340.748 164.04 361.964 189.973 344.734C215.88 327.478 218.391 298.161 205.835 274.116C193.279 250.071 144.36 229.317 113.072 202.032C81.7835 174.747 79.3235 131.08 79.3235 131.08C38.7076 197.377 18.2075 246.753 32.4294 301.144Z"
       fill="#161C24" fill-opacity="0.03" />
     <path
       d="M309.489 244.953C303.672 217.359 289.424 185.779 267.925 148.644C218.699 63.5992 169.652 0.464844 169.652 0.464844C169.652 0.464844 130.83 54.6755 115.609 76.4575C115.301 76.8947 115.019 77.3062 114.712 77.7433C104.154 92.9419 99.1061 111.278 100.336 129.768C100.362 130.128 102.976 165.206 126.884 186.088C138.287 196.014 152.945 205.452 167.115 214.582C191.408 230.192 214.368 244.953 224.464 264.318C243.35 300.527 233.946 340.825 201.581 362.349C197.276 365.23 192.766 367.39 188.077 369.01C200.659 369.679 224.413 367.467 249.551 356.949C293.678 338.51 319.38 291.834 309.489 244.953Z"
       fill="#161C24" fill-opacity="0.03" />
     <path
       d="M24.0249 401.567C19.028 398.841 10.4692 395.01 12.1861 388.863C17.6699 377.754 32.1737 372.019 43.1156 365.641C29.1243 367.596 11.1354 370.682 2.32038 383.977C-5.18779 396.167 7.08668 409.282 16.9267 414.606C46.8825 431.347 82.1427 435.23 115.66 436.542C134.726 436.928 153.791 435.822 172.6 432.324C153.791 428.775 135.238 426.229 116.814 423.298C85.3972 417.82 53.2632 414.143 24.0249 401.567Z"
       fill="#161C24" fill-opacity="0.03" />
   </svg>
   <div class="container bi-conmmon-container">
     <div class="bi-home-private-use-contents">
       <div class="bi-common-section-content-headings">
         <h4 class="bi-common-section-content-heading">
           For Entire Buildings And Property Management
         </h4>
         <p class="bi-common-section-content-subheading">
           Lorem Ipsum is simply dummy text of the printing and typesetting
           industry.
         </p>
       </div>

       <div class="common-card-gallery">
          <!-- card -->
         <div class="bi-common-card">
           <img src="{{asset('frontend/pure-water/assets/images/property-1.png')}}" alt="" srcset="" class="bi-common-card-img" />
           <div class="bi-common-card-bottom">
             <div class="bi-common-card-info">
               <span class="bi-common-card-name"> AquaSpin </span>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M17.5538 6.42266L2.14431 21.8321" stroke="#02CC78" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
                 <path d="M9.01675 6.44003L17.5544 6.42165L17.5367 14.96" stroke="#02CC78" stroke-width="2"
                   stroke-linecap="round" stroke-linejoin="round" />
               </svg>
             </div>
           </div>
         </div>
         <!-- card  -->
         <div class="bi-common-card">
           <img src="{{asset('frontend/pure-water/assets/images/property-2.png')}}" alt="" srcset="" class="bi-common-card-img" />
           <div class="bi-common-card-bottom">
             <div class="bi-common-card-info">
               <span class="bi-common-card-name"> Hydroxil </span>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M17.5538 6.42266L2.14431 21.8321" stroke="#02CC78" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
                 <path d="M9.01675 6.44003L17.5544 6.42165L17.5367 14.96" stroke="#02CC78" stroke-width="2"
                   stroke-linecap="round" stroke-linejoin="round" />
               </svg>
             </div>
           </div>
         </div>
         <!-- card  -->
         <div class="bi-common-card">
           <img src="{{asset('frontend/pure-water/assets/images/property-3.png')}}" alt="" srcset="" class="bi-common-card-img" />
           <div class="bi-common-card-bottom">
             <div class="bi-common-card-info">
               <span class="bi-common-card-name">
                 Stratos Water Softening System
               </span>
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M17.5538 6.42266L2.14431 21.8321" stroke="#02CC78" stroke-width="2" stroke-linecap="round"
                   stroke-linejoin="round" />
                 <path d="M9.01675 6.44003L17.5544 6.42165L17.5367 14.96" stroke="#02CC78" stroke-width="2"
                   stroke-linecap="round" stroke-linejoin="round" />
               </svg>
             </div>
           </div>
         </div>
       </div>
     </div>
     <svg xmlns="http://www.w3.org/2000/svg" class="lines" width="1116" height="2" viewBox="0 0 1116 2" fill="none">
       <path d="M1 1H1115" stroke="#DFE3E8" stroke-width="2" stroke-linecap="round" />
     </svg>
   </div>
 </div> 
 <!-- property management section ends -->

 <!-- clean water fabrications technologies section starts -->
 <div class="bi-home-fabrications-section">
   <div class="container bi-home-fabrications-container">
     <div class="bi-common-section-content-headings">
       <h4 class="bi-common-section-content-heading">
         For Entire Buildings And Property Management
       </h4>
       <p class="bi-common-section-content-subheading">
         Lorem Ipsum is simply dummy text of the printing and typesetting
         industry.
       </p>
     </div>
   </div>
   <div class="febrication-background">
     <a href="https://www.youtube.com/watch?v=VIDEO_ID" class="popup-video">
       <span class="round round_1">
         <span class="round round_2">
           <span class="round round_3">
             <svg xmlns="http://www.w3.org/2000/svg" width="148" height="149" viewBox="0 0 148 149" fill="none">
               <g filter="url(#filter0_b_22096_377)">
                 <path
                   d="M73.815 136.583C107.873 136.583 135.482 108.788 135.482 74.5001C135.482 40.2124 107.873 12.4167 73.815 12.4167C39.7574 12.4167 12.1483 40.2124 12.1483 74.5001C12.1483 108.788 39.7574 136.583 73.815 136.583Z"
                   fill="#D9D9D9" fill-opacity="0.16" />
                 <path
                   d="M73.815 136.583C107.873 136.583 135.482 108.788 135.482 74.5001C135.482 40.2124 107.873 12.4167 73.815 12.4167C39.7574 12.4167 12.1483 40.2124 12.1483 74.5001C12.1483 108.788 39.7574 136.583 73.815 136.583Z"
                   stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
               </g>
               <path
                 d="M53.8966 75.9278V65.5599C53.8966 52.6466 62.9616 47.3695 74.0616 53.8261L83.0033 59.0411L91.9449 64.2561C103.045 70.7128 103.045 81.267 91.9449 87.7236L83.0033 92.9386L74.0616 98.1536C62.9616 104.61 53.8966 99.3332 53.8966 86.4199V75.9278Z"
                 fill="white" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                 stroke-linejoin="round" />
               <defs>
                 <filter id="filter0_b_22096_377" x="7.39832" y="7.66675" width="132.833" height="133.667"
                   filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                   <feFlood flood-opacity="0" result="BackgroundImageFix" />
                   <feGaussianBlur in="BackgroundImageFix" stdDeviation="2" />
                   <feComposite in2="SourceAlpha" operator="in" result="effect1_backgroundBlur_22096_377" />
                   <feBlend mode="normal" in="SourceGraphic" in2="effect1_backgroundBlur_22096_377" result="shape" />
                 </filter>
               </defs>
             </svg>
           </span>
         </span>
       </span>
     </a>
   </div>
 </div>
 <!-- clean water fabrications technologies section starts -->

 <!-- clean water fabrications technologies info starts  -->
 <div class="bi-common-section">
   <div class="container clean-water-fabrications-infos">
     <svg class="lines" xmlns="http://www.w3.org/2000/svg" width="1116" height="2" viewBox="0 0 1116 2" fill="none">
       <path d="M1 1H1115" stroke="#DFE3E8" stroke-width="2" stroke-linecap="round" />
     </svg>

     <div class="bi-febrication-information">
       <p class="bi-febrication-information-para-text">
         Lorem Ipsum is simply dummy text of the printing and typesetting
         industry. Lorem Ipsum has been the industry's standard dummy text
         ever since the 1500s, when an unknown printer took a galley of
         type and scrambled it to make a type specimen book. It has
         survived not only five centuries, but also the leap into
         electronic typesetting, remaining essentially unchanged. It was
         popularised in the 1960s with the release of Letraset sheets
         containing Lorem Ipsum passages, and more recently with desktop
         publishing software like Aldus PageMaker including versions of
         Lorem Ipsum.
       </p>
       <ul class="bi-febrication-lists">
         <li class="bi-febrication-list">
           <svg class="rightTik" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
             <path
               d="M7.95695 23.5L7.81943 23.2628C5.71887 19.6402 0.136905 11.9524 0.0805213 11.8752L0 11.7645L1.90175 9.86211L7.92164 14.1169C11.7119 9.13846 15.248 5.71901 17.5546 3.72219C20.0777 1.53786 21.7202 0.532266 21.7368 0.52263L21.7741 0.5H25L24.6919 0.777774C16.7669 7.92267 8.17708 23.1085 8.09152 23.261L7.95695 23.5Z"
               fill="#02CC78" />
           </svg>
           <span>Lorem Ipsum is simply dummy text of the printing and
             typesetting industry.</span>
         </li>
         <li class="bi-febrication-list">
           <svg class="rightTik" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
             <path
               d="M7.95695 23.5L7.81943 23.2628C5.71887 19.6402 0.136905 11.9524 0.0805213 11.8752L0 11.7645L1.90175 9.86211L7.92164 14.1169C11.7119 9.13846 15.248 5.71901 17.5546 3.72219C20.0777 1.53786 21.7202 0.532266 21.7368 0.52263L21.7741 0.5H25L24.6919 0.777774C16.7669 7.92267 8.17708 23.1085 8.09152 23.261L7.95695 23.5Z"
               fill="#02CC78" />
           </svg>
           <span>when an unknown printer took a galley of type and scrambled
             it to make a type specimen book.</span>
         </li>
         <li class="bi-febrication-list">
           <svg class="rightTik" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
             <path
               d="M7.95695 23.5L7.81943 23.2628C5.71887 19.6402 0.136905 11.9524 0.0805213 11.8752L0 11.7645L1.90175 9.86211L7.92164 14.1169C11.7119 9.13846 15.248 5.71901 17.5546 3.72219C20.0777 1.53786 21.7202 0.532266 21.7368 0.52263L21.7741 0.5H25L24.6919 0.777774C16.7669 7.92267 8.17708 23.1085 8.09152 23.261L7.95695 23.5Z"
               fill="#02CC78" />
           </svg>
           <span>It has survived not only five centuries, but also the leap
             into electronic typesetting, remaining essentially
             unchanged.</span>
         </li>
         <li class="bi-febrication-list">
           <svg class="rightTik" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
             <path
               d="M7.95695 23.5L7.81943 23.2628C5.71887 19.6402 0.136905 11.9524 0.0805213 11.8752L0 11.7645L1.90175 9.86211L7.92164 14.1169C11.7119 9.13846 15.248 5.71901 17.5546 3.72219C20.0777 1.53786 21.7202 0.532266 21.7368 0.52263L21.7741 0.5H25L24.6919 0.777774C16.7669 7.92267 8.17708 23.1085 8.09152 23.261L7.95695 23.5Z"
               fill="#02CC78" />
           </svg>
           <span>It was popularised in the 1960s with the release of Letraset
             sheets containing. Lorem Ipsum passages, and more recently
             with desktop publishing software like.</span>
         </li>
       </ul>
     </div>

     <svg class="lines" xmlns="http://www.w3.org/2000/svg" width="1116" height="2" viewBox="0 0 1116 2" fill="none">
       <path d="M1 1H1115" stroke="#DFE3E8" stroke-width="2" stroke-linecap="round" />
     </svg>
   </div>
 </div>
 <!-- clean water fabrications technologies info starts  -->



@endsection
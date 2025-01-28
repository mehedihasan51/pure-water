@extends('frontend.app')
@section('title','contact page')

@section('content')

    <!-- ========================================= About Us Banner Start Hare -============================ -->
    <div class="bi-home-banner-section aboutPage">
      <video class="banner-video" autoplay muted loop playsinline webkit-playsinline>
        <source src="./frontend/pure-water/assets/video/nr--about--page--video.mp4" type="video/mp4" />
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
          <div class="bi-banner-headings aboutPage">
            <h2 class="bi-headline-text">Contact Us</h2>

            <p class="contract--us--text">
              From help finding an PWI in your area to dealer and business
              inquiries, PWI is happy to help. Our contact information is
              below, so you can reach out the way that’s most convenient to
              you.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- ========================================= About Us Banner End Hare -============================ -->

    <!-- ========================================= Contract Us Start Hare -============================ -->
    <section class="nr--contractUs--wrapper">
      <div class="container">
        <div class="nr--contractUs--inner">
          <div class="nr--contractUs--left">
            <div class="nr--contractUs--left--header">
              <h3 class="contractUs--subHeading">Submit an Inquiry</h3>
              <p class="nr--common--peraText">
                Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s.
              </p>
            </div>

            <div class="nr--contractUs--left--form">
              <form action="{{route('store')}}" method="post" >
                @csrf

                <div class="nr--forms--wrapper">
                  <div class="nr--names--wrapper">
                    <div class="nr--names--first">
                      <label class="lebel--names--style" for="firstName">First Name *</label>
                      <input class="inputBoxfirst" id="firstName" name="firstName" type="text" placeholder="Enter Your First Name" />
                    </div>

                    <div class="nr--names--first">
                      <label class="lebel--names--style" for="secondName">Last Name*</label>
                      <input class="inputBoxfirst" id="secondName" name="lastName" type="text" placeholder="Enter Your First Name" />
                    </div>
                  </div>

                  <div class="nr--names--wrapper">
                    <div class="nr--names--first">
                      <label class="lebel--names--style" for="firstName">Email Address *</label>
                      <input class="inputBoxfirst" id="firstName" name="email" type="email" placeholder="Enter Your Email Address" />
                    </div>

                    <div class="nr--names--first">
                      <label class="lebel--names--style" for="secondName">Phone Number *</label>
                      <input class="inputBoxfirst" id="secondName" name="phone" type="number"
                        placeholder="Enter Your Phone Number" />
                    </div>
                  </div>

                  <div class="nr--names--wrapper">
                    <div class="nr--names--first">
                      <label class="lebel--names--style" for="city">City *</label>
                      <input class="inputBoxfirst" id="city" name="city" type="email" placeholder="Enter Your Email Address" />
                    </div>

                    {{-- <div class="nr--names--first">
                      <label class="lebel--names--style" for="postalCode">Postal Code *</label>
                      <input class="inputBoxfirst" id="postalCode" name="postal_code" type="text" placeholder="Enter Your Postal Code" />
                    </div>
                  </div>

                  <div class="nr--home--wrapper">
                    <div class="nr--address--first">
                      <label class="lebel--names--style" for="postalCode">House Address *</label>
                      <input class="inputBoxFull" id="postalCode" name="house_address" type="text" placeholder="Enter Your House Address" />
                    </div>
                  </div>

                  <div class="nr--home--wrapper">
                    <div class="nr--address--first">
                      <label class="lebel--names--style" for="postalCode">Are You A... *</label>
                      <select class="customNiceSelect" name="select" id="area">
                        <option data-display="Select" value="area">
                          Select One Option
                        </option>
                        <option value="two">Select Two</option>
                        <option value="three">Select Three</option>
                        <option value="four">Select Four</option>
                      </select>
                    </div>
                  </div>

                  <div class="nr--intrestCheckbox--wrapper">
                    <h4 class="lebel--names--style">
                      You Are Interested In... *
                    </h4>

                    <div class="nr--input--intrestCheckbox">
                      <div class="nr--input--firstCheckboxs">
                        <input class="checkBoxInput" type="checkbox" id="sanetery" name="interested_in[]" value="stationary solutions" />
                        <label class="checkboxStyle" for="sanetery">
                          Stationary Solutions</label>
                      </div>
                      <div class="nr--input--firstCheckboxs">
                        <input class="checkBoxInput" type="checkbox" id="sanetery2" name="interested_in[]" value="solutions building" />
                        <label class="checkboxStyle" for="sanetery2">
                          Solutions For The Entire Building</label>
                      </div>
                    </div>
                  </div>

                  <div class="nr--intrestCheckbox--wrapper">
                    <h4 class="lebel--names--style">
                      You Currently Have Problems With... *
                    </h4>

                    <div class="nr--input--intrestCheckbox">
                      <div class="nr--input--firstCheckboxs">
                        <input class="checkBoxInput" type="checkbox" id="sanetery3" name="problems[]" value="limescale"/>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                         @enderror
                        <label class="checkboxStyle" for="sanetery3">
                          Limescale</label>
                      </div>
                      <div class="nr--input--firstCheckboxs">
                        <input class="checkBoxInput" type="checkbox" id="sanetery4" name="problems[]" value="legionella" />
                        <label class="checkboxStyle" for="sanetery4">
                          Legionella</label>
                      </div>
                      <div class="nr--input--firstCheckboxs">
                        <input class="checkBoxInput" type="checkbox" id="vehicle3" name="problems[]" value="dirty tap water" />
                        <label class="checkboxStyle" for="vehicle3">
                          Dirty Tap Water</label>
                      </div>
                      <div class="nr--input--firstCheckboxs">
                        <input class="checkBoxInput" type="checkbox" id="vehicle4"  name="problems[]" value="water pipes" />
                        <label class="checkboxStyle" for="vehicle4">
                          Water Pipes</label>
                      </div>
                    </div>
                  </div>

                  <!-- newly added -->
                  <div class="nr--appointment--wrapper">
                    <div class="nr--address--first date_pick">
                      <label class="lebel--names--style" for="Appointment">Appointment Scheduling *</label>
                   
                      
                        <div class="service-calender-container">
                          <div class="calenders">
                            <div class="calender-item">
                              <div class="time-and-date">
                                <div class="calender-info">
                                  <div id="calendar-container"></div>
                                  <input type="hidden" id="selected-date" name="selected-date" />
                                </div>
                                <div class="times">
                                  <input type="hidden" name="appointment_time" value="10.00 AM" id="selected-time" name="selected-time" />
                                  <div class="time-box">9.30 AM</div>
                                  <div class="active time-box">10.00 AM</div>
                                  <div class="time-box">10.30 AM</div>
                                  <div class="time-box booked">11.00 AM</div>
                                  <div class="time-box">11.30 AM</div>
                                  <div class="time-box">12.00 PM</div>
                                  <div class="time-box">12.30 PM</div>
                                  <div class="time-box">1.00 PM</div>
                                  <div class="time-box">1.30 PM</div>
                                  <div class="time-box">2.00 PM</div>
                                  <div class="time-box">2.30 PM</div>
                                  <div class="time-box">3.00 PM</div>
                                  <div class="time-box">3.30 PM</div>
                                  <div class="time-box">4.00 PM</div>
                                  <div class="time-box">4.30 PM</div>
                                  <div class="time-box">5.00 PM</div>
                                  <div class="time-box">5.30 PM</div>
                                  <div class="time-box">6.00 PM</div>
                                  <div class="time-box">6.30 PM</div>
                                  <div class="time-box">7.00 PM</div>
                                  <div class="time-box">7.30 PM</div>
                                  <div class="time-box">8.00 PM</div>
                                  <div class="time-box">8.30 PM</div>
                                  <div class="time-box">9.00 PM</div>
                                </div>
                              </div>
                            </div>
                            
                          </div>
                        </div>
                        
                     
                    </div>
                  </div>
                  <!-- newly added -->


                  <div class="nr--note--wrapper">
                    <div class="nr--address--first">
                      <label class="lebel--names--style" for="note">Notes</label>
                      <textarea class="noteAreaText" placeholder="Write Here..." name="note" id="note"></textarea>
                    </div>
                  </div>

                  <div class="nr--imageUploder--wrapper">
                    <h4 class="lebel--names--style">Images</h4>
                    <div class="image--Uploader--wrapper" id="image--Uploader--wrapper">
                      <input type="file" hidden multiple accept="image/*" id="image_upload" name="image[]"/>
                      <label class="nr-image-box image_upload_lable" for="image_upload" id="image_upload_lable">
                        <svg xmlns="http://www.w3.org/2000/svg" width="38" height="39" viewBox="0 0 38 39" fill="none">
                          <rect x="0.3" y="0.844434" width="37.4" height="37.4" rx="1.7" stroke="#C4CDD5"
                            stroke-width="0.6" stroke-dasharray="2 2" />
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M13.3051 32.6978H24.7049C29.1643 32.6978 32.1593 29.5698 32.1593 24.9152V14.1732C32.1593 9.5187 29.1643 6.39062 24.7062 6.39062H13.3051C8.84699 6.39062 5.85205 9.5187 5.85205 14.1732V24.9152C5.85205 29.5698 8.84699 32.6978 13.3051 32.6978ZM14.3971 18.2291C12.5836 18.2291 11.1102 16.7536 11.1102 14.9407C11.1102 13.1278 12.5836 11.6523 14.3971 11.6523C16.2092 11.6523 17.684 13.1278 17.684 14.9407C17.684 16.7536 16.2092 18.2291 14.3971 18.2291ZM29.2918 23.4048C29.7322 24.5342 29.5034 25.8916 29.0325 27.0102C28.4744 28.3405 27.4056 29.3477 26.0591 29.7875C25.4613 29.983 24.8343 30.0685 24.2087 30.0685H13.1231C12.02 30.0685 11.0439 29.8038 10.2436 29.311C9.74233 29.0015 9.65371 28.2875 10.0254 27.8246C10.6471 27.0509 11.2608 26.2744 11.8798 25.4912C13.0597 23.9926 13.8546 23.5582 14.7382 23.9396C15.0966 24.0971 15.4564 24.3333 15.8267 24.5831C16.8135 25.2537 18.1851 26.1754 19.9919 25.1749C21.2283 24.4824 21.9455 23.2946 22.57 22.2602L22.5804 22.2428C22.6247 22.1703 22.6685 22.0978 22.7122 22.0254L22.7123 22.0253C22.9221 21.6781 23.1292 21.3355 23.3635 21.0198C23.6571 20.6248 24.7457 19.3895 26.1557 20.2691C27.0538 20.823 27.809 21.5723 28.6172 22.3745C28.9254 22.6813 29.145 23.0302 29.2918 23.4048Z"
                            fill="#C4CDD5" />
                        </svg>
                        <span>Drag & Drop Or, Select a File</span>
                      </label>
                    </div>
                  </div> --}}
                </div>

                <div class="nr--imageUploder--submitBtn">
                  <button type="submit" class="submit--btn--contract">Submit</button>
                </div>
                
              </form>

              

            </div>
          </div>
          <div class="nr--contractUs--right">
            <h3 class="contractUs--subHeading">PWI Headquarters</h3>
            <div class="nr--contractUs--right--address--wrapper">
              <h5 class="contractUssub">Address</h5>

              <div class="nr--contract--wrapper">
                <div class="nr--contract--svg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M12 0C7.58889 0 4 3.58889 4 8.00002C4 9.32423 4.33108 10.6372 4.96047 11.8018L11.5625 23.7422C11.6504 23.9014 11.8179 24 12 24C12.1821 24 12.3496 23.9014 12.4375 23.7422L19.042 11.7978C19.669 10.6372 20 9.32419 20 7.99997C20 3.58889 16.4111 0 12 0ZM12 12C9.79445 12 8.00003 10.2056 8.00003 8.00002C8.00003 5.79445 9.79445 4.00003 12 4.00003C14.2056 4.00003 16 5.79445 16 8.00002C16 10.2056 14.2056 12 12 12Z"
                      fill="#29BBEE" />
                  </svg>
                </div>

                <h6 class="checkboxStyle">Washington, NYC</h6>
              </div>
            </div>
            <div class="nr--contractUs--right--address--wrapper">
              <h5 class="contractUssub">Customer Service</h5>

              <div class="nr--contract--wrapper">
                <div class="nr--contract--svg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                      d="M17.6452 15.6458C16.9836 14.9926 16.1577 14.9926 15.5003 15.6458C14.9989 16.143 14.4974 16.6402 14.0044 17.1459C13.8696 17.285 13.7558 17.3144 13.5915 17.2217C13.267 17.0448 12.9215 16.9015 12.6096 16.7077C11.1559 15.7933 9.93806 14.6176 8.85932 13.2945C8.32416 12.6371 7.848 11.9334 7.51511 11.1412C7.44769 10.9811 7.46033 10.8757 7.59096 10.7451C8.0924 10.2605 8.58121 9.76326 9.07423 9.26603C9.76108 8.57496 9.76108 7.76591 9.07001 7.07062C8.67813 6.67452 8.28624 6.28685 7.89435 5.89075C7.48983 5.48622 7.08951 5.07748 6.68077 4.67717C6.0192 4.03245 5.19329 4.03245 4.53593 4.68138C4.03027 5.17861 3.54568 5.68849 3.03159 6.17729C2.55543 6.62817 2.31524 7.18018 2.26468 7.8249C2.18461 8.87414 2.44166 9.86439 2.80405 10.8294C3.54568 12.8267 4.67499 14.6007 6.04448 16.2273C7.89435 18.4269 10.1024 20.1672 12.6855 21.4229C13.8485 21.9876 15.0537 22.4216 16.3642 22.4932C17.2659 22.5438 18.0497 22.3163 18.6775 21.6126C19.1074 21.1322 19.5919 20.6939 20.047 20.2346C20.7213 19.552 20.7255 18.7261 20.0555 18.0519C19.2548 17.247 18.45 16.4464 17.6452 15.6458ZM16.8403 12.2873L18.3952 12.0219C18.1508 10.5934 17.4766 9.29974 16.4526 8.27156C15.3697 7.18861 14.0002 6.50597 12.4916 6.29528L12.2725 7.85861C13.4398 8.02295 14.5016 8.54968 15.3402 9.38823C16.1324 10.1804 16.6507 11.1833 16.8403 12.2873ZM19.2717 5.52836C17.4766 3.73327 15.2054 2.59975 12.6981 2.25L12.479 3.81333C14.6449 4.11673 16.6086 5.09855 18.1592 6.64503C19.6299 8.11565 20.5948 9.97395 20.9446 12.0177L22.4995 11.7522C22.0907 9.38402 20.9741 7.23496 19.2717 5.52836Z"
                      fill="#29BBEE" />
                  </svg>
                </div>

                <h6 class="checkboxStyle">+456 7896 5962</h6>
              </div>

              <div class="nr--contract--wrapper--two">
                <div class="nr--contract--svg">
                  <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                    <path
                      d="M14.6203 10.0328L12.7312 12.1244C11.9651 12.9727 10.6172 12.9909 9.83454 12.1244L7.94533 10.0328L1.16016 17.5442C1.41272 17.673 1.69119 17.7499 1.98724 17.7499H20.5784C20.8745 17.7499 21.1529 17.6731 21.4054 17.5442L14.6203 10.0328Z"
                      fill="#29BBEE" />
                    <path
                      d="M20.5737 0.25H1.98247C1.68642 0.25 1.40795 0.326905 1.15547 0.455776L8.40591 8.4828C8.40639 8.48333 8.40696 8.48343 8.40745 8.48396C8.40775 8.48431 8.40795 8.48475 8.40802 8.48523L10.7655 11.0952C11.0159 11.3715 11.5403 11.3715 11.7907 11.0952L14.1477 8.48567C14.1477 8.48567 14.1483 8.4845 14.1488 8.48396C14.1488 8.48396 14.1498 8.48333 14.1503 8.4828L21.4006 0.455728C21.1481 0.326808 20.8697 0.25 20.5737 0.25ZM0.210847 1.47562C0.08018 1.76719 0 2.09085 0 2.43756V15.5629C0 15.9096 0.0800919 16.2333 0.210803 16.5248L7.00773 9.00047L0.210847 1.47562ZM22.3453 1.47552L15.5485 9.00047L22.3453 16.5249C22.476 16.2334 22.5561 15.9097 22.5561 15.5629V2.43756C22.5561 2.09076 22.476 1.7671 22.3453 1.47552Z"
                      fill="#29BBEE" />
                  </svg>
                </div>

                <h6 class="checkboxStyle">conumiug@mail.com</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="nr--aboutUs--frame">
        <img src="./assets/images/nr--aboutPage--shape.png" alt="not found" />
      </div>
      <div class="nr--cintract--us--frame">
        <img src="./assets/images/contractPageFrame.png" alt="not found" />
      </div>
    </section>

@endsection
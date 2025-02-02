@extends('frontend.user_dashboard')
@section('title','Product ')
@section('content')

<section class="product--details--wrapper">
    <div class="container">
        <div class="product--details--main">
            <div class="product--details--left">

                <div class="product--details--left--preview--img">
                    <img src="{{asset('frontend/pure-water/assets/images/product--previewItem.png')}}" alt="not found">
                </div>

                <div class="product--details--left--item--wrapper">
                    <div class="product--details--left--item">
                        <img src="{{asset('frontend/pure-water/assets/images/itemShow1.png')}}" alt="not found">
                    </div>
                    <div class="product--details--left--item">
                        <img src="{{asset('frontend/pure-water/assets/images/itemShow2.png')}}" alt="not found">
                    </div>
                    <div class="product--details--left--item">
                        <img src="{{asset('frontend/pure-water/assets/images/itemShow1.png')}}" alt="not found">
                    </div>
                    <div class="product--details--left--item">
                        <img src="{{asset('frontend/pure-water/assets/images/itemShow2.png')}}" alt="not found">
                    </div>
                </div>
            </div>
            <div class="product--details--right">
                <div class="product--details--right--header">
                    <h2 class="ptoduct--details--right--header">Aquaslim 24 Naturpur Premium</h2>
                </div>

                <div class="product--details--right--review">
                    <div class="product--details--right--review--wrapper">
                        <div class="product--details--right--star">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g clip-path="url(#clip0_22017_9688)">
                                    <path
                                        d="M23.79 9.87L18.43 15.36L19.69 23.13C19.801 23.75 19.128 24.204 18.59 23.91L12 20.26V0.0299988C12.28 0.0299988 12.56 0.159999 12.68 0.429999L15.99 7.48L23.36 8.6C23.976 8.71 24.203 9.435 23.79 9.87Z"
                                        fill="#FFC107" />
                                    <path
                                        d="M12 0.0299988V20.26L5.40998 23.91C4.88098 24.207 4.19798 23.757 4.30998 23.13L5.56998 15.36L0.20998 9.87C0.114706 9.77003 0.048594 9.6459 0.0188019 9.51105C-0.0109902 9.37621 -0.00332746 9.23578 0.0409605 9.10498C0.0852485 8.97417 0.164474 8.85798 0.27006 8.76896C0.375646 8.67996 0.503569 8.62152 0.639979 8.6L8.00998 7.48L11.32 0.429999C11.44 0.159999 11.72 0.0299988 12 0.0299988Z"
                                        fill="#FFC107" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_22017_9688">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="product--details--right--star">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g clip-path="url(#clip0_22017_9688)">
                                    <path
                                        d="M23.79 9.87L18.43 15.36L19.69 23.13C19.801 23.75 19.128 24.204 18.59 23.91L12 20.26V0.0299988C12.28 0.0299988 12.56 0.159999 12.68 0.429999L15.99 7.48L23.36 8.6C23.976 8.71 24.203 9.435 23.79 9.87Z"
                                        fill="#FFC107" />
                                    <path
                                        d="M12 0.0299988V20.26L5.40998 23.91C4.88098 24.207 4.19798 23.757 4.30998 23.13L5.56998 15.36L0.20998 9.87C0.114706 9.77003 0.048594 9.6459 0.0188019 9.51105C-0.0109902 9.37621 -0.00332746 9.23578 0.0409605 9.10498C0.0852485 8.97417 0.164474 8.85798 0.27006 8.76896C0.375646 8.67996 0.503569 8.62152 0.639979 8.6L8.00998 7.48L11.32 0.429999C11.44 0.159999 11.72 0.0299988 12 0.0299988Z"
                                        fill="#FFC107" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_22017_9688">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="product--details--right--star">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g clip-path="url(#clip0_22017_9688)">
                                    <path
                                        d="M23.79 9.87L18.43 15.36L19.69 23.13C19.801 23.75 19.128 24.204 18.59 23.91L12 20.26V0.0299988C12.28 0.0299988 12.56 0.159999 12.68 0.429999L15.99 7.48L23.36 8.6C23.976 8.71 24.203 9.435 23.79 9.87Z"
                                        fill="#FFC107" />
                                    <path
                                        d="M12 0.0299988V20.26L5.40998 23.91C4.88098 24.207 4.19798 23.757 4.30998 23.13L5.56998 15.36L0.20998 9.87C0.114706 9.77003 0.048594 9.6459 0.0188019 9.51105C-0.0109902 9.37621 -0.00332746 9.23578 0.0409605 9.10498C0.0852485 8.97417 0.164474 8.85798 0.27006 8.76896C0.375646 8.67996 0.503569 8.62152 0.639979 8.6L8.00998 7.48L11.32 0.429999C11.44 0.159999 11.72 0.0299988 12 0.0299988Z"
                                        fill="#FFC107" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_22017_9688">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="product--details--right--star">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <g clip-path="url(#clip0_22017_9688)">
                                    <path
                                        d="M23.79 9.87L18.43 15.36L19.69 23.13C19.801 23.75 19.128 24.204 18.59 23.91L12 20.26V0.0299988C12.28 0.0299988 12.56 0.159999 12.68 0.429999L15.99 7.48L23.36 8.6C23.976 8.71 24.203 9.435 23.79 9.87Z"
                                        fill="#FFC107" />
                                    <path
                                        d="M12 0.0299988V20.26L5.40998 23.91C4.88098 24.207 4.19798 23.757 4.30998 23.13L5.56998 15.36L0.20998 9.87C0.114706 9.77003 0.048594 9.6459 0.0188019 9.51105C-0.0109902 9.37621 -0.00332746 9.23578 0.0409605 9.10498C0.0852485 8.97417 0.164474 8.85798 0.27006 8.76896C0.375646 8.67996 0.503569 8.62152 0.639979 8.6L8.00998 7.48L11.32 0.429999C11.44 0.159999 11.72 0.0299988 12 0.0299988Z"
                                        fill="#FFC107" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_22017_9688">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="product--details--right--star">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                fill="none">
                                <g clip-path="url(#clip0_22017_9704)">
                                    <path
                                        d="M24.123 9.87L18.763 15.36L20.023 23.13C20.134 23.75 19.461 24.204 18.923 23.91L12.333 20.26V0.0299988C12.613 0.0299988 12.893 0.159999 13.013 0.429999L16.323 7.48L23.693 8.6C24.309 8.71 24.536 9.435 24.123 9.87Z"
                                        fill="#ECEFF1" />
                                    <path
                                        d="M12.333 0.0299988V20.26L5.74299 23.91C5.21399 24.207 4.53099 23.757 4.64299 23.13L5.90299 15.36L0.542987 9.87C0.447714 9.77003 0.381602 9.6459 0.35181 9.51105C0.322018 9.37621 0.32968 9.23578 0.373968 9.10498C0.418256 8.97417 0.497482 8.85798 0.603068 8.76896C0.708654 8.67996 0.836577 8.62152 0.972987 8.6L8.34299 7.48L11.653 0.429999C11.773 0.159999 12.053 0.0299988 12.333 0.0299988Z"
                                        fill="#FFC107" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_22017_9704">
                                        <rect width="24" height="24" fill="white"
                                            transform="translate(0.333008)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="product--details--right--review--text">
                        <h5>4.7 <span>(69 Reviews)</span></h5>
                    </div>
                </div>

                <div class="product--details--right--availables--wrapper">
                    <div class="product--details--right--availables--svg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                            fill="none">
                            <g clip-path="url(#clip0_22017_9711)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M9 0C4.03594 0 0 4.03594 0 9C0 13.9641 4.03594 18 9 18C13.9641 18 18 13.9641 18 9C18 4.03594 13.9641 0 9 0Z"
                                    fill="#4BAE4F" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M13.3525 5.96602C13.5705 6.18399 13.5705 6.54258 13.3525 6.76055L8.0791 12.034C7.97012 12.143 7.82598 12.1992 7.68184 12.1992C7.5377 12.1992 7.39355 12.143 7.28457 12.034L4.64785 9.39727C4.42988 9.1793 4.42988 8.8207 4.64785 8.60274C4.86582 8.38477 5.22441 8.38477 5.44238 8.60274L7.68184 10.8422L12.558 5.96602C12.776 5.74453 13.1346 5.74453 13.3525 5.96602Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_22017_9711">
                                    <rect width="18" height="18" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <h6 class="Available--text--style">Available in stock</h6>
                </div>

                <div class="product--details--right--price--discount">
                    <div class="product--details--right--price">
                        <h3 class="mainPriceText">$260</h3>
                        <h4 class="discountedPriceText">$300</h4>
                    </div>

                    <div class="product--details--right--price--discounted">
                        <h6 class="discountTexts">-15%</h6>
                    </div>
                </div>

                <div class="product--details--right--details--wrapper">
                    <div class="product--details--description">
                        <ul>
                            <li>Innovative Water Filter System</li>
                            <li>Powerless System</li>
                            <li>Multi-stage Filtering</li>
                            <li>Post-mineral Filter For Optimal Taste</li>
                            <li>Special Housing To Protect Against Damage And Contamination</li>
                            <li>Hygiene, Safety And Easy Maintenance Thanks To High-quality FT Filters</li>
                            <li>7 Liter Tank</li>
                            <li>Dimensions H x W x D: 42 x 42 x 9.5 cm</li>
                        </ul>
                    </div>
                </div>
                <div class="product--details--right--details--counterAndCart--wrapper">
                    <div class="product--details--right--details--counter">
                        <button class="counter--up">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z"
                                    fill="#637381" />
                            </svg>
                        </button>
                        <div class="counter--output">
                            <input readonly class="counterValue" type="number" value="0">
                        </div>
                        <button class="counter--down">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H13.125V20.25C13.125 20.5484 13.0065 20.8345 12.7955 21.0455C12.5845 21.2565 12.2984 21.375 12 21.375C11.7016 21.375 11.4155 21.2565 11.2045 21.0455C10.9935 20.8345 10.875 20.5484 10.875 20.25V13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H10.875V3.75C10.875 3.45163 10.9935 3.16548 11.2045 2.9545C11.4155 2.74353 11.7016 2.625 12 2.625C12.2984 2.625 12.5845 2.74353 12.7955 2.9545C13.0065 3.16548 13.125 3.45163 13.125 3.75V10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </div>
                    <div class="product--details--right--btn">
                        <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="product--details--main--wrappers">

            <ul class="nav nav-pills custom mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Product Details</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Rating & Reviews</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">FAQs</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab" tabindex="0">
                    <!-- clean water fabrications technologies info starts  -->
                    <div class="bi-common-section custom">
                        <div class="container clean-water-fabrications-infos">

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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M7.95695 23.5L7.81943 23.2628C5.71887 19.6402 0.136905 11.9524 0.0805213 11.8752L0 11.7645L1.90175 9.86211L7.92164 14.1169C11.7119 9.13846 15.248 5.71901 17.5546 3.72219C20.0777 1.53786 21.7202 0.532266 21.7368 0.52263L21.7741 0.5H25L24.6919 0.777774C16.7669 7.92267 8.17708 23.1085 8.09152 23.261L7.95695 23.5Z"
                                                fill="#02CC78" />
                                        </svg>
                                        <span>Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.</span>
                                    </li>
                                    <li class="bi-febrication-list">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M7.95695 23.5L7.81943 23.2628C5.71887 19.6402 0.136905 11.9524 0.0805213 11.8752L0 11.7645L1.90175 9.86211L7.92164 14.1169C11.7119 9.13846 15.248 5.71901 17.5546 3.72219C20.0777 1.53786 21.7202 0.532266 21.7368 0.52263L21.7741 0.5H25L24.6919 0.777774C16.7669 7.92267 8.17708 23.1085 8.09152 23.261L7.95695 23.5Z"
                                                fill="#02CC78" />
                                        </svg>
                                        <span>when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book.</span>
                                    </li>
                                    <li class="bi-febrication-list">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
                                            <path
                                                d="M7.95695 23.5L7.81943 23.2628C5.71887 19.6402 0.136905 11.9524 0.0805213 11.8752L0 11.7645L1.90175 9.86211L7.92164 14.1169C11.7119 9.13846 15.248 5.71901 17.5546 3.72219C20.0777 1.53786 21.7202 0.532266 21.7368 0.52263L21.7741 0.5H25L24.6919 0.777774C16.7669 7.92267 8.17708 23.1085 8.09152 23.261L7.95695 23.5Z"
                                                fill="#02CC78" />
                                        </svg>
                                        <span>It has survived not only five centuries, but also the leap
                                            into electronic typesetting, remaining essentially
                                            unchanged.</span>
                                    </li>
                                    <li class="bi-febrication-list">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24"
                                            viewBox="0 0 25 24" fill="none">
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

                            <svg class="lines" xmlns="http://www.w3.org/2000/svg" width="1116" height="2" viewBox="0 0 1116 2"
                                fill="none">
                                <path d="M1 1H1115" stroke="#DFE3E8" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                    <!-- clean water fabrications technologies info starts  -->
                </div>

                <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab" tabindex="0">

                    <div class="rating--and--service--wrapper">
                        <div class="rating--and--service--main">   
                            <div class="review-and-comments-section">
                                <div class="profile-raitings-section">
                                  <div class="overall-ratings-side">
                                    <div class="starWrapper">
                                        <h4>4.5</h4>
                                        <div class="stars">
                                          <span>
                                            <svg class="starssss" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                <g clip-path="url(#clip0_22107_1862)">
                                                  <path d="M29.4415 11.515L23.1882 17.92L24.6582 26.985C24.7877 27.7084 24.0025 28.238 23.3749 27.895L15.6865 23.6367V0.0350342C16.0132 0.0350342 16.3399 0.186701 16.4799 0.501701L20.3415 8.7267L28.9399 10.0334C29.6585 10.1617 29.9234 11.0075 29.4415 11.515Z" fill="#FFC107"/>
                                                  <path d="M15.6863 0.0350342V23.6367L7.998 27.895C7.38084 28.2415 6.584 27.7165 6.71467 26.985L8.18467 17.92L1.93134 11.515C1.82018 11.3984 1.74305 11.2536 1.7083 11.0963C1.67354 10.9389 1.68248 10.7751 1.73415 10.6225C1.78582 10.4699 1.87825 10.3343 2.00143 10.2305C2.12461 10.1267 2.27386 10.0585 2.433 10.0334L11.0313 8.7267L14.893 0.501701C15.033 0.186701 15.3597 0.0350342 15.6863 0.0350342Z" fill="#FFC107"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1862">
                                                    <rect width="28" height="28" fill="white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                          </span>
                                          <span>
                                            <svg class="starssss" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                <g clip-path="url(#clip0_22107_1862)">
                                                  <path d="M29.4415 11.515L23.1882 17.92L24.6582 26.985C24.7877 27.7084 24.0025 28.238 23.3749 27.895L15.6865 23.6367V0.0350342C16.0132 0.0350342 16.3399 0.186701 16.4799 0.501701L20.3415 8.7267L28.9399 10.0334C29.6585 10.1617 29.9234 11.0075 29.4415 11.515Z" fill="#FFC107"/>
                                                  <path d="M15.6863 0.0350342V23.6367L7.998 27.895C7.38084 28.2415 6.584 27.7165 6.71467 26.985L8.18467 17.92L1.93134 11.515C1.82018 11.3984 1.74305 11.2536 1.7083 11.0963C1.67354 10.9389 1.68248 10.7751 1.73415 10.6225C1.78582 10.4699 1.87825 10.3343 2.00143 10.2305C2.12461 10.1267 2.27386 10.0585 2.433 10.0334L11.0313 8.7267L14.893 0.501701C15.033 0.186701 15.3597 0.0350342 15.6863 0.0350342Z" fill="#FFC107"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1862">
                                                    <rect width="28" height="28" fill="white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                          </span>
                                          <span>
                                            <svg class="starssss" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                <g clip-path="url(#clip0_22107_1862)">
                                                  <path d="M29.4415 11.515L23.1882 17.92L24.6582 26.985C24.7877 27.7084 24.0025 28.238 23.3749 27.895L15.6865 23.6367V0.0350342C16.0132 0.0350342 16.3399 0.186701 16.4799 0.501701L20.3415 8.7267L28.9399 10.0334C29.6585 10.1617 29.9234 11.0075 29.4415 11.515Z" fill="#FFC107"/>
                                                  <path d="M15.6863 0.0350342V23.6367L7.998 27.895C7.38084 28.2415 6.584 27.7165 6.71467 26.985L8.18467 17.92L1.93134 11.515C1.82018 11.3984 1.74305 11.2536 1.7083 11.0963C1.67354 10.9389 1.68248 10.7751 1.73415 10.6225C1.78582 10.4699 1.87825 10.3343 2.00143 10.2305C2.12461 10.1267 2.27386 10.0585 2.433 10.0334L11.0313 8.7267L14.893 0.501701C15.033 0.186701 15.3597 0.0350342 15.6863 0.0350342Z" fill="#FFC107"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1862">
                                                    <rect width="28" height="28" fill="white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                          </span>
                                          <span>
                                            <svg class="starssss" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                                <g clip-path="url(#clip0_22107_1862)">
                                                  <path d="M29.4415 11.515L23.1882 17.92L24.6582 26.985C24.7877 27.7084 24.0025 28.238 23.3749 27.895L15.6865 23.6367V0.0350342C16.0132 0.0350342 16.3399 0.186701 16.4799 0.501701L20.3415 8.7267L28.9399 10.0334C29.6585 10.1617 29.9234 11.0075 29.4415 11.515Z" fill="#FFC107"/>
                                                  <path d="M15.6863 0.0350342V23.6367L7.998 27.895C7.38084 28.2415 6.584 27.7165 6.71467 26.985L8.18467 17.92L1.93134 11.515C1.82018 11.3984 1.74305 11.2536 1.7083 11.0963C1.67354 10.9389 1.68248 10.7751 1.73415 10.6225C1.78582 10.4699 1.87825 10.3343 2.00143 10.2305C2.12461 10.1267 2.27386 10.0585 2.433 10.0334L11.0313 8.7267L14.893 0.501701C15.033 0.186701 15.3597 0.0350342 15.6863 0.0350342Z" fill="#FFC107"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1862">
                                                    <rect width="28" height="28" fill="white"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                          </span>
                                          <span>
                                            <svg class="starssss" xmlns="http://www.w3.org/2000/svg" width="29" height="28" viewBox="0 0 29 28" fill="none">
                                                <g clip-path="url(#clip0_22107_1878)">
                                                  <path d="M30.3312 11.515L24.0778 17.92L25.5478 26.985C25.6773 27.7084 24.8922 28.238 24.2645 27.895L16.5762 23.6367V0.0350342C16.9028 0.0350342 17.2295 0.186701 17.3695 0.501701L21.2312 8.7267L29.8295 10.0334C30.5482 10.1617 30.813 11.0075 30.3312 11.515Z" fill="#ECEFF1"/>
                                                  <path d="M16.576 0.0350342V23.6367L8.88765 27.895C8.27048 28.2415 7.47365 27.7165 7.60432 26.985L9.07432 17.92L2.82099 11.515C2.70983 11.3984 2.6327 11.2536 2.59794 11.0963C2.56319 10.9389 2.57213 10.7751 2.6238 10.6225C2.67547 10.4699 2.7679 10.3343 2.89108 10.2305C3.01426 10.1267 3.16351 10.0585 3.32265 10.0334L11.921 8.7267L15.7827 0.501701C15.9227 0.186701 16.2493 0.0350342 16.576 0.0350342Z" fill="#FFC107"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1878">
                                                    <rect width="28" height="28" fill="white" transform="translate(0.888672)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                          </span>
                                        </div>
                                    </div>
                                    <div>
                                        <p>Based on 5 Rating</p>

                                    </div>
                                  </div>


                                  <div class="progress-bar-side">
                                    <!-- recommnended -->
                                    <div class="progress-list">
                                      <span class="progress-stars">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_22107_1887)">
                                              <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                              <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_22107_1887">
                                                <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_22107_1887)">
                                              <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                              <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_22107_1887">
                                                <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_22107_1887)">
                                              <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                              <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_22107_1887">
                                                <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_22107_1887)">
                                              <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                              <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_22107_1887">
                                                <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <g clip-path="url(#clip0_22107_1887)">
                                              <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                              <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                            </g>
                                            <defs>
                                              <clipPath id="clip0_22107_1887">
                                                <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                              </clipPath>
                                            </defs>
                                        </svg>
                                      </span>
                                      <div class="progress-line-container">
                                        <div class="bar bar-1"></div>
                                      </div>
                                      <span class="percent">(4)</span>
                                    </div>
                                    <!-- quality -->
                                    <div class="progress-list">
                                        <span class="progress-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                      <div class="progress-line-container">
                                        <div class="bar bar-2"></div>
                                      </div>
                                      <span class="percent">(2)</span>
                                    </div>
                                    <!-- communication -->
                                    <div class="progress-list">
                                        <span class="progress-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                      <div class="progress-line-container">
                                        <div class="bar bar-3"></div>
                                      </div>
                                      <span class="percent">(1)</span>
                                    </div>
                                    <!-- supportive -->
                                    <div class="progress-list">
                                        <span class="progress-stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                      <div class="progress-line-container">
                                        <div class="bar bar-4"></div>
                                      </div>
                                      <span class="percent">(0)</span>
                                    </div>
                                    <!--  -->
                                    <div class="progress-list">
                                        <span class="progress-stars">
                                            <svg class="startsss" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1887)">
                                                  <path d="M17.0298 6.70584L13.7731 10.0416L14.5387 14.7626C14.6061 15.1393 14.1972 15.4152 13.8703 15.2365L9.86621 13.0188V0.727051C10.0363 0.727051 10.2065 0.806039 10.2794 0.970091L12.2905 5.25367L16.7685 5.93418C17.1428 6.00102 17.2808 6.44153 17.0298 6.70584Z" fill="#637381"/>
                                                  <path d="M9.86579 0.727051V13.0188L5.86171 15.2365C5.54029 15.417 5.12529 15.1436 5.19335 14.7626L5.95892 10.0416L2.70219 6.70583C2.6443 6.64509 2.60413 6.56967 2.58603 6.48774C2.56792 6.40581 2.57258 6.32048 2.59949 6.24101C2.6264 6.16153 2.67454 6.09093 2.73869 6.03685C2.80284 5.98276 2.88057 5.94726 2.96345 5.93418L7.44147 5.25367L9.45262 0.970091C9.52553 0.806039 9.69566 0.727051 9.86579 0.727051Z" fill="#637381"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1887">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.888672 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            
                                            
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <g clip-path="url(#clip0_22107_1929)">
                                                  <path d="M16.3228 6.70584L13.066 10.0416L13.8316 14.7626C13.8991 15.1393 13.4902 15.4152 13.1633 15.2365L9.15918 13.0188V0.727051C9.32931 0.727051 9.49944 0.806039 9.57235 0.970091L11.5835 5.25367L16.0615 5.93418C16.4358 6.00102 16.5737 6.44153 16.3228 6.70584Z" fill="#ECEFF1"/>
                                                  <path d="M9.15974 0.727051V13.0188L5.15565 15.2365C4.83423 15.417 4.41924 15.1436 4.48729 14.7626L5.25287 10.0416L1.99613 6.70583C1.93824 6.64509 1.89807 6.56967 1.87997 6.48774C1.86187 6.40581 1.86653 6.32048 1.89343 6.24101C1.92034 6.16153 1.96848 6.09093 2.03264 6.03685C2.09679 5.98276 2.17452 5.94726 2.2574 5.93418L6.73541 5.25367L8.74657 0.970091C8.81948 0.806039 8.98961 0.727051 9.15974 0.727051Z" fill="#ECEFF1"/>
                                                </g>
                                                <defs>
                                                  <clipPath id="clip0_22107_1929">
                                                    <rect width="14.5824" height="14.5824" fill="white" transform="translate(0.180664 0.708801)"/>
                                                  </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                      <div class="progress-line-container">
                                        <div class="bar bar-5"></div>
                                      </div>
                                      <span class="percent">(0)</span>
                                    </div>
                                  </div>
                                </div>                                       
                            </div>
                            {{-- <form action="{{route('rating.product')}}" method="post">
                              @csrf
                                <!-- user rating -->
                               
                                <div class="user--rating--main">
                                  <div class="rating--header">
                                      <h4 class="footer-info-box-heading">Rating</h4>
                                  </div>
                                  <div class="user--rating--wrapper">
                                      <!-- Stars -->
                                      <div class="user--rating" data-value="1">&#9733;</div>
                                      <div class="user--rating" data-value="2">&#9733;</div>
                                      <div class="user--rating" data-value="3">&#9733;</div>
                                      <div class="user--rating" data-value="4">&#9733;</div>
                                      <div class="user--rating" data-value="5">&#9733;</div>
                                  </div>
                              </div>

                                <!-- tittle review -->
                                <div class="title--review--wrapper">
                                    <div class="nr--company--input--main">
                                        <label for="titleReview"><span class="footer-info-box-heading">Title of review</span></label>
                                        <div class="nr--comapny--name--input custom">
                                            <input type="text" id="titleReview" name="title" placeholder="Give your review a title">
                                        </div>
                                    </div>
                                </div>

                                <!-- write review -->
                                 <div class="write--haree--wrapper">
                                     <div class="nr--company--input--main">
                                         <label for="companyinstraction"><span class="footer-info-box-heading">How was your overall experience?</span></label>
                                         <div class="nr--comapny--name--input customs">
                                             <textarea placeholder="Write Here..." name="description" id="companyinstraction"></textarea>
                                         </div>
                                     </div>
                                 </div>
                                <!-- name email -->
                                <div class="nr--names--input--main--wrapper customs">
                                    <div class="nr--names--input--main">
                                        <label for="companyFirstName custom"><span class="footer-info-box-heading">First Name *</span></label>
                                        <div class="nr--first--name--input">
                                            <input type="text" id="companyFirstName" name="name" placeholder="Enter Your First Name">
                                        </div>
                                    </div>
            
                                    <div class="nr--names--input--main">
                                        <label for="companySecondName"><span class="footer-info-box-heading">Email address</span></label>
                                        <div class="nr--first--name--input">
                                            <input type="email" id="companySecondName" name="email" placeholder="Enter email address">
                                        </div>
                                    </div>
                                </div>
                                <!-- first and second Name in upper -->

                                <div class="title--review--submit">
                                    <button>Submit</button>
                                </div>
                            </form> --}}


                            {{-- <form action="{{route('rating.product')}}" method="POST">
                              @csrf
                          
                              <!-- User Rating -->
                              <div class="user--rating--main">
                                  <div class="rating--header">
                                      <h4 class="footer-info-box-heading">Rating</h4>
                                  </div>
                                  <div class="user--rating--wrapper">
                                      <!-- Stars -->
                                      <div class="user--rating" data-value="1">&#9733;</div>
                                      <div class="user--rating" data-value="2">&#9733;</div>
                                      <div class="user--rating" data-value="3">&#9733;</div>
                                      <div class="user--rating" data-value="4">&#9733;</div>
                                      <div class="user--rating" data-value="5">&#9733;</div>
                                  </div>
                              </div>
                          
                              <!-- Hidden input to store rating -->
                              <input type="hidden" name="rating" id="rating-input">
                          
                              <!-- Title of Review -->
                              <div class="title--review--wrapper">
                                  <div class="nr--company--input--main">
                                      <label for="titleReview"><span class="footer-info-box-heading">Title of review</span></label>
                                      <div class="nr--comapny--name--input custom">
                                          <input type="text" id="titleReview" name="title" placeholder="Give your review a title">
                                      </div>
                                  </div>
                              </div>
                          
                              <!-- Review Text -->
                              <div class="write--haree--wrapper">
                                  <div class="nr--company--input--main">
                                      <label for="companyinstraction"><span class="footer-info-box-heading">How was your overall experience?</span></label>
                                      <div class="nr--comapny--name--input customs">
                                          <textarea placeholder="Write Here..." name="description" id="companyinstraction"></textarea>
                                      </div>
                                  </div>
                              </div>
                          
                              <!-- Name & Email -->
                              <div class="nr--names--input--main--wrapper customs">
                                  <div class="nr--names--input--main">
                                      <label for="companyFirstName custom"><span class="footer-info-box-heading">First Name *</span></label>
                                      <div class="nr--first--name--input">
                                          <input type="text" id="companyFirstName" name="name" placeholder="Enter Your First Name">
                                      </div>
                                  </div>
                          
                                  <div class="nr--names--input--main">
                                      <label for="companySecondName"><span class="footer-info-box-heading">Email address</span></label>
                                      <div class="nr--first--name--input">
                                          <input type="email" id="companySecondName" name="email" placeholder="Enter email address">
                                      </div>
                                  </div>
                              </div>
                          
                              <!-- Submit Button -->
                              <div class="title--review--submit">
                                  <button type="submit">Submit</button>
                              </div>
                          </form> --}}
                          

                          <form action="{{ route('rating.product') }}" method="post">
                            @csrf
                            {{-- <input type="hidden" name="product_id" value="{{ $product->id }}"> --}}
                        
                            <!-- User Rating -->
                            <div class="user--rating--main">
                                <div class="rating--header">
                                    <h4 class="footer-info-box-heading">Rating</h4>
                                </div>
                                <div class="user--rating--wrapper">
                                    <!-- Stars -->
                                    <div class="user--rating" data-value="1">&#9733;</div>
                                    <div class="user--rating" data-value="2">&#9733;</div>
                                    <div class="user--rating" data-value="3">&#9733;</div>
                                    <div class="user--rating" data-value="4">&#9733;</div>
                                    <div class="user--rating" data-value="5">&#9733;</div>
                                </div>
                            </div>
                        
                            <!-- Hidden input to store rating -->
                            <input type="hidden" name="rating" id="rating-input">
                        
                            <!-- Title of Review -->
                            <div class="title--review--wrapper">
                                <div class="nr--company--input--main">
                                    <label for="titleReview"><span class="footer-info-box-heading">Title of review</span></label>
                                    <div class="nr--comapny--name--input custom">
                                        <input type="text" id="titleReview" name="title" placeholder="Give your review a title">
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Review Text -->
                            <div class="write--haree--wrapper">
                                <div class="nr--company--input--main">
                                    <label for="companyinstraction"><span class="footer-info-box-heading">How was your overall experience?</span></label>
                                    <div class="nr--comapny--name--input customs">
                                        <textarea placeholder="Write Here..." name="description" id="companyinstraction"></textarea>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Name & Email -->
                            <div class="nr--names--input--main--wrapper customs">
                                <div class="nr--names--input--main">
                                    <label for="companyFirstName custom"><span class="footer-info-box-heading">First Name *</span></label>
                                    <div class="nr--first--name--input">
                                        <input type="text" id="companyFirstName" name="name" placeholder="Enter Your First Name">
                                    </div>
                                </div>
                        
                                <div class="nr--names--input--main">
                                    <label for="companySecondName"><span class="footer-info-box-heading">Email address</span></label>
                                    <div class="nr--first--name--input">
                                        <input type="email" id="companySecondName" name="email" placeholder="Enter email address">
                                    </div>
                                </div>
                            </div>
                        
                            <!-- Submit Button -->
                            <div class="title--review--submit">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                        
     
                          
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                    aria-labelledby="pills-contact-tab" tabindex="0">

                    <div class="accordion customs" id="accordionExample">

                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <span>qustion1</span>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maxime beatae earum ea harum, velit dolor? Animi facere officiis quae id maiores dolore tempore nam, modi praesentium quos fuga quas?</p>
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>qustion2</span>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ab reprehenderit quae enim, odit numquam incidunt praesentium qui, veniam voluptas rem sint, laboriosam ut! Possimus culpa officia error quam adipisci.</p>
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>qustion2</span>
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, odit eius. Beatae ut earum reiciendis maiores consequuntur inventore repellendus molestias numquam nihil? Incidunt amet minima mollitia magni eligendi iure tempore.
                            </div>
                          </div>
                        </div>

                      </div>
                </div>

            </div>
        </div>

    </div>


        <!-- modal -->
        <div class="checkOut--modal">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" class="modal-body">
                    
                        <div class="checkout--wrapper">
                            <div class="cart--header">
                              <h3 class="ptoduct--details--right--header">Your Cart</h3>
                              <div class="items--product--check">
                                  <h4>(2 Items)</h4>
                              </div>
                            </div>
    
                            <div class="addcard--item--wrappers">
                                <div class="addcard--item">
                                    <div class="cartphoto">
                                        <img src="./assets/images/cartImage.png" alt="not found">
                                    </div>
                                    <div class="cartquantity">
                                        <h4 class="addcartTexts">Aquaslim 24 Naturpur Premium</h4>
                                        <div class="product--details--right--details--counter">
                                            <button class="counter--up">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none">
                                                    <path
                                                        d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z"
                                                        fill="#637381" />
                                                </svg>
                                            </button>
                                            <div class="counter--output">
                                                <input readonly class="counterValue" type="number" value="0">
                                            </div>
                                            <button class="counter--down">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none">
                                                    <path
                                                        d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H13.125V20.25C13.125 20.5484 13.0065 20.8345 12.7955 21.0455C12.5845 21.2565 12.2984 21.375 12 21.375C11.7016 21.375 11.4155 21.2565 11.2045 21.0455C10.9935 20.8345 10.875 20.5484 10.875 20.25V13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H10.875V3.75C10.875 3.45163 10.9935 3.16548 11.2045 2.9545C11.4155 2.74353 11.7016 2.625 12 2.625C12.2984 2.625 12.5845 2.74353 12.7955 2.9545C13.0065 3.16548 13.125 3.45163 13.125 3.75V10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z"
                                                        fill="black" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cartprice">
                                        <h3 class="ptoduct--details--right--header">$260</h3>
                                    </div>
                                    <div class="cartdelete">
                                        <div class="catr--delete--svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" viewBox="0 0 18 21" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2871 3.74297C17.6761 3.74297 18 4.06596 18 4.47696V4.85696C18 5.25795 17.6761 5.59095 17.2871 5.59095H0.713853C0.32386 5.59095 0 5.25795 0 4.85696V4.47696C0 4.06596 0.32386 3.74297 0.713853 3.74297H3.62957C4.22185 3.74297 4.7373 3.32197 4.87054 2.72798L5.02323 2.04598C5.26054 1.11699 6.0415 0.5 6.93527 0.5H11.0647C11.9488 0.5 12.7385 1.11699 12.967 1.99699L13.1304 2.72698C13.2627 3.32197 13.7781 3.74297 14.3714 3.74297H17.2871ZM15.8058 17.634C16.1102 14.7971 16.6432 8.05712 16.6432 7.98913C16.6626 7.78313 16.5955 7.58813 16.4623 7.43113C16.3193 7.28413 16.1384 7.19713 15.9391 7.19713H2.06852C1.86818 7.19713 1.67756 7.28413 1.54529 7.43113C1.41108 7.58813 1.34494 7.78313 1.35467 7.98913C1.35646 8.00162 1.37558 8.23903 1.40755 8.63594C1.54958 10.3992 1.94517 15.3102 2.20079 17.634C2.38168 19.346 3.50498 20.422 5.13206 20.461C6.38763 20.49 7.68112 20.5 9.00379 20.5C10.2496 20.5 11.5149 20.49 12.8094 20.461C14.4929 20.432 15.6152 19.375 15.8058 17.634Z" fill="#C4CDD5"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="addcard--item">
                                    <div class="cartphoto">
                                        <img src="{{asset('frontend/pure-water/assets/images/cartImage.png')}}" alt="not found">
                                    </div>
                                    <div class="cartquantity">
                                        <h4 class="addcartTexts">Aquaslim 24 Naturpur Premium</h4>
                                        <div class="product--details--right--details--counter">
                                            <button class="counter--up">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none">
                                                    <path
                                                        d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z"
                                                        fill="#637381" />
                                                </svg>
                                            </button>
                                            <div class="counter--output">
                                                <input readonly class="counterValue" type="number" value="0">
                                            </div>
                                            <button class="counter--down">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none">
                                                    <path
                                                        d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H13.125V20.25C13.125 20.5484 13.0065 20.8345 12.7955 21.0455C12.5845 21.2565 12.2984 21.375 12 21.375C11.7016 21.375 11.4155 21.2565 11.2045 21.0455C10.9935 20.8345 10.875 20.5484 10.875 20.25V13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H10.875V3.75C10.875 3.45163 10.9935 3.16548 11.2045 2.9545C11.4155 2.74353 11.7016 2.625 12 2.625C12.2984 2.625 12.5845 2.74353 12.7955 2.9545C13.0065 3.16548 13.125 3.45163 13.125 3.75V10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z"
                                                        fill="black" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cartprice">
                                        <h3 class="ptoduct--details--right--header">$260</h3>
                                    </div>
                                    <div class="cartdelete">
                                        <div class="catr--delete--svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" viewBox="0 0 18 21" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2871 3.74297C17.6761 3.74297 18 4.06596 18 4.47696V4.85696C18 5.25795 17.6761 5.59095 17.2871 5.59095H0.713853C0.32386 5.59095 0 5.25795 0 4.85696V4.47696C0 4.06596 0.32386 3.74297 0.713853 3.74297H3.62957C4.22185 3.74297 4.7373 3.32197 4.87054 2.72798L5.02323 2.04598C5.26054 1.11699 6.0415 0.5 6.93527 0.5H11.0647C11.9488 0.5 12.7385 1.11699 12.967 1.99699L13.1304 2.72698C13.2627 3.32197 13.7781 3.74297 14.3714 3.74297H17.2871ZM15.8058 17.634C16.1102 14.7971 16.6432 8.05712 16.6432 7.98913C16.6626 7.78313 16.5955 7.58813 16.4623 7.43113C16.3193 7.28413 16.1384 7.19713 15.9391 7.19713H2.06852C1.86818 7.19713 1.67756 7.28413 1.54529 7.43113C1.41108 7.58813 1.34494 7.78313 1.35467 7.98913C1.35646 8.00162 1.37558 8.23903 1.40755 8.63594C1.54958 10.3992 1.94517 15.3102 2.20079 17.634C2.38168 19.346 3.50498 20.422 5.13206 20.461C6.38763 20.49 7.68112 20.5 9.00379 20.5C10.2496 20.5 11.5149 20.49 12.8094 20.461C14.4929 20.432 15.6152 19.375 15.8058 17.634Z" fill="#C4CDD5"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="addcard--item">
                                    <div class="cartphoto">
                                        <img src="./assets/images/cartImage.png" alt="not found">
                                    </div>
                                    <div class="cartquantity">
                                        <h4 class="addcartTexts">Aquaslim 24 Naturpur Premium</h4>
                                        <div class="product--details--right--details--counter">
                                            <button class="counter--up">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none">
                                                    <path
                                                        d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z"
                                                        fill="#637381" />
                                                </svg>
                                            </button>
                                            <div class="counter--output">
                                                <input readonly class="counterValue" type="number" value="0">
                                            </div>
                                            <button class="counter--down">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                    fill="none">
                                                    <path
                                                        d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H13.125V20.25C13.125 20.5484 13.0065 20.8345 12.7955 21.0455C12.5845 21.2565 12.2984 21.375 12 21.375C11.7016 21.375 11.4155 21.2565 11.2045 21.0455C10.9935 20.8345 10.875 20.5484 10.875 20.25V13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H10.875V3.75C10.875 3.45163 10.9935 3.16548 11.2045 2.9545C11.4155 2.74353 11.7016 2.625 12 2.625C12.2984 2.625 12.5845 2.74353 12.7955 2.9545C13.0065 3.16548 13.125 3.45163 13.125 3.75V10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z"
                                                        fill="black" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="cartprice">
                                        <h3 class="ptoduct--details--right--header">$260</h3>
                                    </div>
                                    <div class="cartdelete">
                                        <div class="catr--delete--svg">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="21" viewBox="0 0 18 21" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2871 3.74297C17.6761 3.74297 18 4.06596 18 4.47696V4.85696C18 5.25795 17.6761 5.59095 17.2871 5.59095H0.713853C0.32386 5.59095 0 5.25795 0 4.85696V4.47696C0 4.06596 0.32386 3.74297 0.713853 3.74297H3.62957C4.22185 3.74297 4.7373 3.32197 4.87054 2.72798L5.02323 2.04598C5.26054 1.11699 6.0415 0.5 6.93527 0.5H11.0647C11.9488 0.5 12.7385 1.11699 12.967 1.99699L13.1304 2.72698C13.2627 3.32197 13.7781 3.74297 14.3714 3.74297H17.2871ZM15.8058 17.634C16.1102 14.7971 16.6432 8.05712 16.6432 7.98913C16.6626 7.78313 16.5955 7.58813 16.4623 7.43113C16.3193 7.28413 16.1384 7.19713 15.9391 7.19713H2.06852C1.86818 7.19713 1.67756 7.28413 1.54529 7.43113C1.41108 7.58813 1.34494 7.78313 1.35467 7.98913C1.35646 8.00162 1.37558 8.23903 1.40755 8.63594C1.54958 10.3992 1.94517 15.3102 2.20079 17.634C2.38168 19.346 3.50498 20.422 5.13206 20.461C6.38763 20.49 7.68112 20.5 9.00379 20.5C10.2496 20.5 11.5149 20.49 12.8094 20.461C14.4929 20.432 15.6152 19.375 15.8058 17.634Z" fill="#C4CDD5"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
    
    
                            </div>
    
                            <div class="checkOut--last">
                                <div class="total--balance--wrapper">
                                    <h5 class="subtotal--text">Subtotal</h5>
                                    <h4 class="mainPriceText">$320</h4>
                                </div>
                                <p>Any Notes For Your Order?</p>
                                <h6>(e.g. Private well? Optimized for different address?)</h6>
    
                                <div class="tatal--balance--write">
                                    <div class="write--haree--wrapper">
                                        <div class="nr--company--input--main">
                                            <div class="nr--comapny--name--input customsTwo">
                                                <textarea placeholder="Write Here..." name="companyinstraction" id="companyinstraction"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="checkout--btns--main">
                                <a href="{{route('payment.page')}}">Check Out Now</a>
                            </div>
                        </div>
    
                    </form>
                  </div>
                </div>
              </div>
        </div>
</section>

@endsection




<script>
  document.addEventListener("DOMContentLoaded", function() {
      const stars = document.querySelectorAll(".user--rating");
      let selectedRating = 0; // Store user rating
  
      stars.forEach(star => {
          star.addEventListener("click", function() {
              selectedRating = this.getAttribute("data-value"); // Get rating
              highlightStars(selectedRating);
              console.log("User rating:", selectedRating); // You can send this to your backend
          });
  
          star.addEventListener("mouseover", function() {
              highlightStars(this.getAttribute("data-value"));
          });
  
          star.addEventListener("mouseout", function() {
              highlightStars(selectedRating); // Keep selected stars highlighted
          });
      });
  
      function highlightStars(rating) {
          stars.forEach(star => {
              if (star.getAttribute("data-value") <= rating) {
                  star.style.color = "#FFD700"; // Gold color for selected stars
              } else {
                  star.style.color = "#ccc"; // Grey for unselected stars
              }
          });
      }
  });
  </script>

<style>
  .user--rating {
      font-size: 28px;
      cursor: pointer;
      color: #ccc; /* Default color */
      transition: color 0.2s;
  }
  </style>
    

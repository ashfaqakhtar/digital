<?php
$title = "Occams Digital";
include "header.php";
?>

<div class="container mx-auto px-8 mt-[150px]">
    <div
        class="grid grid-cols-1  mx-auto border-[4px] border-solid border-[var(--primary)] bg-black p-[50px] rounded-[1.875rem]">

        <!-- Heading Section -->
        <div class="flex items-center justify-between pb-4">
            <div>
                <h1 class="heading_2 text-[var(--primary)]">Smart Add-ons</h1>
            </div>
            <div class="flex space-x-8 text-sm font-medium text-gray-600 pr-[51px]">
                <div>Qty</div>
                <div>$</div>
            </div>
        </div>

        <!-- first add-ons     -->
        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">Reputation Management Tool</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium">
                <div></div>
                <div>$50/mo</div>
            </div>
        </div>

        <!-- 2nd add-ons  -->

        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">Campaign based Landing Page</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium ">
                <div>1</div>
                <div>$298/mo</div>
            </div>
        </div>

        <!-- 3rd add-ons   -->

        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">AI Chat Receptionist</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium ">
                <div></div>
                <div>$50/mo</div>
            </div>
        </div>

        <!-- 4th add-ons   -->

        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">AI Knowledgebase Builder</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium ">
                <div></div>
                <div>$50/mo</div>
            </div>
        </div>


        <!-- 5th add-ons   -->

        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">Website Copy, Design and Development**</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium ">
                <div>1</div>
                <div>$3000/project</div>
            </div>
        </div>

        <!-- 6th add-ons   -->
        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">Website Maintenance On Wordpress</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium ">
                <div>1</div>
                <div>$69/mo</div>
            </div>
        </div>

        <!-- 7th add-ons   -->
        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">Email Campaign</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium ">
                <div>1</div>
                <div>$198/mo</div>
            </div>
        </div>

        <!-- 8th add-ons   -->
        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">Unlimited Requests Graphic Design</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium ">
                <div></div>
                <div>$1500/mo</div>
            </div>
        </div>

        <!-- 9th add-ons   -->
        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">Content and Copywriting (5-hrs Per Qty)</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium ">
                <div>1</div>
                <div>$750/mo</div>
            </div>
        </div>

        <!-- 10th add-ons   -->
        <div
            class="addon-item flex items-center justify-between  rounded-[2.1875rem] border border-[#676767] p-[10px] mt-4 cursor-pointer">

            <div class="flex gap-4 justify-center items-center">
                <div>
                    <svg class="default-icon" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                        viewBox="0 0 36 36" fill="none">
                        <g clip-path="url(#clip0_1563_18)">
                            <path
                                d="M18 36C27.9411 36 36 27.9411 36 18C36 8.05887 27.9411 0 18 0C8.05887 0 0 8.05887 0 18C0 27.9411 8.05887 36 18 36Z"
                                fill="#313131" />
                            <path
                                d="M22.4498 11.8576L15.8519 19.1459L13.5421 16.5954C13.3262 16.3568 13.0613 16.1596 12.7626 16.0152C12.4639 15.8708 12.1373 15.782 11.8013 15.7539C11.4654 15.7258 11.1267 15.7589 10.8046 15.8513C10.4826 15.9437 10.1834 16.0936 9.92428 16.2925C9.66513 16.4914 9.45106 16.7354 9.29428 17.0105C9.1375 17.2855 9.04109 17.5864 9.01055 17.8958C8.98001 18.2052 9.01594 18.5171 9.11628 18.8137C9.21663 19.1103 9.37942 19.3858 9.59538 19.6245L13.8785 24.3601C14.1192 24.6269 14.4208 24.8416 14.7617 24.9891C15.1026 25.1365 15.4746 25.2131 15.8513 25.2133C16.2279 25.2135 16.6 25.1374 16.9412 24.9903C17.2823 24.8433 17.5841 24.6289 17.8252 24.3624L26.3965 14.8913C26.6144 14.6528 26.7789 14.3771 26.8808 14.0798C26.9827 13.7826 27.0198 13.4698 26.9901 13.1594C26.9603 12.8489 26.8644 12.5469 26.7076 12.2707C26.5508 11.9945 26.3364 11.7495 26.0766 11.5498C25.8168 11.3501 25.5168 11.1996 25.1937 11.107C24.8706 11.0144 24.5308 10.9814 24.1938 11.01C23.8568 11.0386 23.5293 11.1282 23.23 11.2736C22.9307 11.4191 22.6656 11.6175 22.4498 11.8576Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1563_18">
                                <rect width="36" height="36" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <img class="selected-icon hidden" src="./assets/image/check.svg" alt="check">
                </div>
                <div>
                    <h1 class="body-text-1">Additional Social Media Account Management (10 posts per month)</h1>
                </div>
            </div>


            <div class="flex space-x-8 text-sm font-medium ">
                <div>1</div>
                <div>$200/mo</div>
            </div>
        </div>

        <div class="mt-8">
            <div class="left-buttons inline-flex gap-[40px]">
                <div>
                    <a
                        class="px-[44px] bg-[var(--primary)] hover:bg-orange-600 text-white px-4 py-2 rounded-full  cta-font transition cursor-pointer">
                        Done
                    </a>
                </div>

                <div>
                    <a
                        class="border border-[var(--primary)] hover:bg-white hover:text-black text-white px-[44px] py-2 rounded-full cta-font transition cursor-pointer">
                        Cancel
                    </a>
                </div>
            </div>

            <div class=" text-right text-white text-lg font-semibold">
                Total: <span id="total-amount">$0/mo</span>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php"
    ?>





<script>
    const popup = document.getElementById('popup');
    const openBtn = document.getElementById('openPopup');
    const closeBtn = document.getElementById('closePopup');

    openBtn.addEventListener('click', () => {
        popup.classList.remove('hidden');
    });

    closeBtn.addEventListener('click', () => {
        popup.classList.add('hidden');
    });

    // Optional: Close popup when clicking outside the popup box
    popup.addEventListener('click', (e) => {
        if (e.target === popup) {
            popup.classList.add('hidden');
        }
    });

</script>

<script>
    const addonItems = document.querySelectorAll('.addon-item');
    const totalAmountEl = document.getElementById('total-amount');

    addonItems.forEach(item => {
        item.addEventListener('click', () => {
            item.classList.toggle('selected');

            // Toggle icon visibility
            const defaultIcon = item.querySelector('.default-icon');
            const selectedIcon = item.querySelector('.selected-icon');
            defaultIcon.classList.toggle('hidden');
            selectedIcon.classList.toggle('hidden');

            updateTotal();
        });
    });

    function updateTotal() {
        let total = 0;

        document.querySelectorAll('.addon-item.selected').forEach(selectedItem => {
            // The price and quantity are inside the last flex container
            const priceQtyDivs = selectedItem.querySelectorAll('.flex.space-x-8 > div');
            if (priceQtyDivs.length >= 2) {
                const qtyText = priceQtyDivs[0].textContent.trim();
                const priceText = priceQtyDivs[1].textContent.trim();

                // Default quantity to 1 if empty or invalid
                const quantity = qtyText && !isNaN(qtyText) ? parseInt(qtyText, 10) : 1;

                const priceMatch = priceText.match(/\$([\d.]+)/);
                if (priceMatch) {
                    const price = parseFloat(priceMatch[1]);
                    total += price * quantity;
                }
            }
        });

        totalAmountEl.textContent = `$${total}/mo`;
    }

</script>
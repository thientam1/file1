<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="front/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="front/anh/logo/layer2.png" />
    <!-- Icon fontawesome -->
    <link rel="stylesheet" href="front/fontawesome-free-6.4.2-web/css/all.min.css">
    <!-- Icon boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="front/js/ckeditor.js"></script>
    <script src="front/js/main.js"></script>
    <!-- CKeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <title>Mrobot </title>


</head>

<body>
    <header>
        <nav class=" navbar navbar-expand-md container ">
            <a href="{{route('index')}}">
                <svg width="165" height="50" viewBox="0 0 165 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_1725_18682)">
                        <path d="M57.1118 25.461C56.2871 24.3129 54.9755 23.731 53.215 23.731C50.2603 23.7547 46.3841 26.5079 43.2676 28.7204C42.7189 29.1094 42.1923 29.4858 41.6959 29.8274C38.6825 31.9038 35.409 32.957 31.9801 32.957H31.5947L31.5312 33.0851C30.0594 36.0898 28.5178 38.4066 26.9572 39.9754L26.9049 40.0276L26.8938 40.0971C26.2942 43.7487 26.8525 47.0333 27.119 48.2763L27.1618 48.4692H27.2062C27.249 48.3981 27.2934 48.3285 27.341 48.232C27.2839 42.4313 32.4479 37.2822 40.3557 32.5237C43.4421 30.8221 46.2239 28.7045 48.7869 27.2481C49.2545 26.8054 49.7706 26.4166 50.3253 26.0889C51.3017 25.5066 52.408 25.1756 53.5445 25.126C54.6811 25.0763 55.8122 25.3093 56.8359 25.8042L57.6289 26.179L57.1118 25.461Z" fill="#D1D3D4" />
                        <path d="M30.0658 33.1421L30.2117 32.8574L29.8945 32.8163C27.9273 32.5652 26.0326 31.9145 24.3276 30.9043C23.1413 30.1848 21.8027 29.1347 20.3848 28.0246C17.7203 25.9386 14.7006 23.5728 12.8022 23.5728C12.5957 23.5709 12.3904 23.6035 12.1947 23.6693C11.5334 23.9049 11.2431 24.7763 11.1226 25.2745C11.0104 25.7867 10.953 26.3094 10.9513 26.8337C12.2026 25.382 13.9425 27.2085 15.3176 28.295C16.6355 29.3356 22.0739 34.3234 28.9571 35.1631C29.3299 34.5305 29.701 33.8648 30.0673 33.1421" fill="#D1D3D4" />
                        <path d="M49.0344 15.479C47.7766 15.4871 46.526 15.6691 45.3184 16.0198C42.5524 16.8105 40.2622 18.0077 38.0466 19.1827C35.5978 20.4716 33.2885 21.6877 30.605 22.1874C30.5664 22.195 30.5271 22.1987 30.4877 22.1985C30.3374 22.1992 30.1916 22.1474 30.0757 22.0521C29.9598 21.9567 29.8811 21.8238 29.8533 21.6766C29.835 21.5704 29.8454 21.4612 29.8834 21.3603C27.4727 21.6339 24.9811 21.4315 22.1564 20.685C22.1627 20.7479 22.1595 20.8113 22.1469 20.8732C22.1114 21.0103 22.0309 21.1315 21.9182 21.2175C21.8055 21.3035 21.6671 21.3493 21.5252 21.3477C21.4716 21.3478 21.4183 21.3409 21.3666 21.3271C20.6846 21.1532 20.0042 20.9697 19.3286 20.7878C16.6324 20.0588 14.0678 19.3646 11.9981 19.3646C11.7242 19.3646 11.4599 19.3772 11.2051 19.4025C8.82607 19.6445 7.04658 21.2006 6.52954 23.4668L7.04975 22.597C9.27015 20.8179 11.1623 19.2886 20.4197 22.597C29.6772 25.9053 35.1553 24.3967 40.3193 20.9428C44.933 17.8701 50.5458 15.6419 55.1928 17.5285C53.5291 16.1875 51.4181 15.4727 49.0328 15.4727" fill="#D1D3D4" />
                        <path d="M39.079 0.316288C35.8436 4.25878 28.5924 6.642 19.2001 6.83967C8.38516 7.07372 2.6026 13.7584 0.937299 19.3994C-0.923081 25.7093 -2.79233e-05 32.4588 3.54944 38.4049C7.00534 44.2009 12.6119 48.4201 18.5483 49.6963C18.6088 49.7087 18.6704 49.7151 18.7322 49.7153C18.9184 49.7153 19.0996 49.6556 19.2492 49.5452C19.3988 49.4347 19.5089 49.2793 19.5633 49.1017C19.6045 48.9673 20.4118 46.2061 19.2366 42.4502C19.9497 42.7034 20.7 42.837 21.457 42.8456C21.7986 42.8451 22.1396 42.8176 22.4768 42.7634C23.4406 42.5946 24.3603 42.2337 25.1809 41.7022C24.9783 44.2776 25.1979 46.8688 25.8312 49.3737C25.8822 49.5553 25.9914 49.7153 26.1419 49.8295C26.2925 49.9437 26.4763 50.0057 26.6654 50.0063H26.7035C35.1902 49.641 41.1155 45.0169 45.3548 35.4493C47.2787 31.1035 49.0978 28.5432 51.0803 27.384C53.4212 26.0255 56.1048 26.4652 58.0888 28.5305C58.1143 28.5539 58.1413 28.5756 58.1697 28.5954C58.1903 28.6141 58.212 28.6315 58.2347 28.6475C58.3141 28.7018 58.402 28.7424 58.4949 28.7677C58.5116 28.7713 58.5286 28.7739 58.5456 28.7756C58.6324 28.792 58.721 28.7957 58.8089 28.7867H58.8533C58.8628 28.7867 58.8723 28.7772 58.8818 28.7756C58.8914 28.7741 58.9199 28.7756 58.9389 28.7756C59.019 28.7545 59.0955 28.7214 59.1657 28.6776C59.1792 28.6699 59.1915 28.6603 59.2022 28.6491C59.2729 28.602 59.3356 28.5438 59.3878 28.4768C59.4036 28.4562 59.4211 28.4372 59.4354 28.4151C59.4917 28.3343 59.5336 28.2444 59.5591 28.1494C60.6582 23.7815 59.6701 19.7125 56.847 16.9814C55.8803 16.0488 54.7411 15.3124 53.4926 14.8132C52.9994 12.43 51.8939 10.6462 50.1858 9.52652C46.538 7.13224 40.8284 8.16016 35.7928 9.3573C38.7444 7.11642 40.4144 4.2493 40.619 0.920393C40.6304 0.737383 40.5832 0.555504 40.4843 0.400917C40.3854 0.24633 40.2399 0.127002 40.0687 0.0600971C39.9678 0.0201195 39.8601 -0.000277017 39.7515 2.84128e-06C39.6229 -0.000156111 39.4959 0.0281306 39.3796 0.0828238C39.2634 0.137517 39.1607 0.217254 39.079 0.316288ZM5.04345 37.5194C1.74457 31.9923 0.883375 25.7314 2.60577 19.8896C4.10454 14.8037 9.35738 8.78641 19.2366 8.57292C27.4981 8.39263 34.2417 6.54869 38.3193 3.42537C37.0505 6.72581 33.7374 9.34149 28.7209 10.9324C28.514 10.9985 28.3395 11.1394 28.2317 11.3275C28.1239 11.5155 28.0905 11.7369 28.1383 11.9482C28.186 12.1595 28.3114 12.3453 28.4897 12.469C28.6679 12.5927 28.8862 12.6454 29.1015 12.6166C30.5765 12.4142 32.375 11.9714 34.2798 11.5096C39.3851 10.2445 45.7387 8.68203 49.231 10.9719C50.3412 11.6962 51.0993 12.7716 51.5561 14.2281C49.5086 13.809 47.2454 13.9118 44.9044 14.576C41.9862 15.4047 39.623 16.6461 37.3408 17.8496C34.9967 19.0831 32.7826 20.2486 30.3275 20.7056C30.2152 20.7264 30.1082 20.769 30.0124 20.831C29.9167 20.893 29.8341 20.9733 29.7695 21.0671C29.7048 21.1609 29.6593 21.2666 29.6356 21.3779C29.6119 21.4893 29.6104 21.6042 29.6312 21.7162C29.6521 21.8281 29.6948 21.9348 29.757 22.0303C29.8192 22.1258 29.8996 22.2081 29.9938 22.2726C30.0879 22.337 30.1938 22.3824 30.3055 22.406C30.4172 22.4297 30.5324 22.4312 30.6447 22.4104C33.3583 21.9043 35.685 20.6787 38.1481 19.382C40.3526 18.2212 42.6333 17.0225 45.377 16.2444C49.4134 15.101 53.1484 15.8222 55.6353 18.2244C57.2943 19.8295 58.1729 22.0198 58.2379 24.4742C57.1087 22.9971 55.3673 22.2238 53.1326 22.2333C49.7703 22.2586 45.6784 25.1652 42.389 27.4994C41.845 27.8869 41.3232 28.2569 40.8331 28.5954C37.5882 30.8204 34.2893 31.5637 31.4028 31.4388C31.307 31.4175 31.2083 31.4127 31.111 31.4245C28.9988 31.3078 26.9453 30.6886 25.1222 29.6185C24.012 28.9449 22.7083 27.9217 21.3269 26.84C17.8663 24.131 14.2898 21.3303 11.6951 22.2538C10.9957 22.5021 10.0743 23.1679 9.65872 24.9328C9.27332 26.5664 9.41923 28.8089 10.0489 31.1446C6.99741 28.5732 6.27895 25.6539 6.73889 23.5633C7.21469 21.3746 8.94026 19.869 11.2273 19.6366C13.37 19.4215 16.2359 20.1901 19.2715 21.0077C19.9487 21.1895 20.6291 21.373 21.3111 21.5485C21.5344 21.6058 21.7714 21.5722 21.97 21.4552C22.1685 21.3382 22.3123 21.1474 22.3697 20.9247C22.4271 20.7019 22.3935 20.4656 22.2761 20.2676C22.1588 20.0697 21.9674 19.9263 21.744 19.869C21.0684 19.6967 20.3944 19.5148 19.7251 19.3345C16.5277 18.4742 13.5079 17.6614 11.0496 17.9112C8.03624 18.2275 5.67944 20.2834 5.04187 23.1916C4.36782 26.2533 5.60966 30.6702 11.0401 33.9849C11.8493 35.8849 12.9886 37.6275 14.4056 39.1324C15.165 39.9305 16.0047 40.6486 16.9115 41.2752C18.2596 44.1408 18.2073 46.592 18.0518 47.7986C12.9005 46.4149 8.08699 42.6289 5.04663 37.5194H5.04345ZM15.6586 37.9258C12.2122 34.3597 10.6135 28.423 11.3431 25.3265C11.4493 24.8727 11.7126 24.082 12.2709 23.8827C12.4419 23.8248 12.6216 23.7965 12.8022 23.7989C14.6213 23.7989 17.7188 26.2201 20.2453 28.2032C21.6727 29.3102 23.0128 30.3713 24.2103 31.0972C25.9429 32.1223 27.8676 32.7832 29.866 33.0392C27.3696 37.9416 24.7908 40.63 22.1976 41.0523C21.9575 41.0916 21.7146 41.1111 21.4713 41.1108C19.66 41.1108 17.7061 40.0433 15.657 37.9258H15.6586ZM41.826 30.0186C42.324 29.6771 42.8521 29.3007 43.4041 28.9116C46.492 26.7182 50.3381 23.9887 53.1548 23.9649H53.2198C54.9168 23.9649 56.1444 24.5058 56.9326 25.6017C55.8751 25.0914 54.7069 24.8511 53.5331 24.9025C52.3593 24.9538 51.2167 25.2952 50.208 25.8959C47.894 27.2401 45.8481 30.055 43.7673 34.7519C39.9482 43.3722 34.7175 47.6737 27.3442 48.2335C26.782 45.5683 26.7062 42.8239 27.1206 40.1319C28.7066 38.5346 30.2434 36.2289 31.739 33.1736H31.9817C35.0585 33.1736 38.4716 32.3117 41.826 30.0028" fill="#0744F2" />
                        <path d="M23.4727 21.1817C23.4508 21.2934 23.4512 21.4083 23.4739 21.5199C23.4966 21.6315 23.541 21.7375 23.6048 21.832C23.6686 21.9264 23.7504 22.0074 23.8456 22.0703C23.9408 22.1332 24.0474 22.1767 24.1595 22.1985C25.085 22.3864 26.0208 22.52 26.962 22.5986H27.0301C27.2536 22.5968 27.4678 22.5092 27.6282 22.354C27.7886 22.1988 27.8828 21.988 27.8914 21.7653C27.9 21.5426 27.8222 21.3252 27.6742 21.1582C27.5262 20.9912 27.3194 20.8875 27.0968 20.8685C26.2201 20.7945 25.3484 20.6699 24.4862 20.4953C24.3741 20.4726 24.2586 20.4723 24.1463 20.4944C24.0341 20.5165 23.9274 20.5606 23.8324 20.6242C23.7374 20.6877 23.6559 20.7694 23.5929 20.8646C23.5298 20.9597 23.4862 21.0664 23.4648 21.1785" fill="#0744F2" />
                    </g>
                    <path d="M89.44 32H86.72V22.06L82.64 32H80.34L76.26 22.14V32H73.62V17.82H77.26L81.52 28.06L85.68 17.82H89.44V32ZM102.223 21.2L99.7425 21.96C99.6492 21.4533 99.3958 20.9933 98.9825 20.58C98.5692 20.1667 97.9625 19.96 97.1625 19.96C96.5092 19.96 95.9758 20.14 95.5625 20.5C95.1492 20.8467 94.9425 21.2667 94.9425 21.76C94.9425 22.6267 95.4558 23.16 96.4825 23.36L98.4625 23.74C99.7158 23.98 100.689 24.48 101.383 25.24C102.076 26 102.423 26.8933 102.423 27.92C102.423 29.0933 101.956 30.12 101.023 31C100.103 31.8667 98.8625 32.3 97.3025 32.3C96.4092 32.3 95.6025 32.1667 94.8825 31.9C94.1625 31.6333 93.5825 31.28 93.1425 30.84C92.7025 30.3867 92.3558 29.9133 92.1025 29.42C91.8625 28.9133 91.7158 28.3933 91.6625 27.86L94.2225 27.18C94.2892 27.94 94.5825 28.5733 95.1025 29.08C95.6358 29.5867 96.3758 29.84 97.3225 29.84C98.0425 29.84 98.6025 29.68 99.0025 29.36C99.4158 29.04 99.6225 28.62 99.6225 28.1C99.6225 27.6867 99.4692 27.3333 99.1625 27.04C98.8692 26.7333 98.4492 26.5267 97.9025 26.42L95.9225 26.02C94.7758 25.78 93.8692 25.3067 93.2025 24.6C92.5358 23.8933 92.2025 23.0133 92.2025 21.96C92.2025 20.7067 92.6825 19.6533 93.6425 18.8C94.6158 17.9467 95.7825 17.52 97.1425 17.52C97.9558 17.52 98.6825 17.6333 99.3225 17.86C99.9625 18.0867 100.476 18.3933 100.863 18.78C101.249 19.1533 101.549 19.54 101.763 19.94C101.976 20.34 102.129 20.76 102.223 21.2ZM104.836 31.62C104.476 31.26 104.296 30.8267 104.296 30.32C104.296 29.8133 104.476 29.3867 104.836 29.04C105.196 28.68 105.622 28.5 106.116 28.5C106.622 28.5 107.056 28.68 107.416 29.04C107.776 29.3867 107.956 29.8133 107.956 30.32C107.956 30.8267 107.776 31.26 107.416 31.62C107.056 31.9667 106.622 32.14 106.116 32.14C105.622 32.14 105.196 31.9667 104.836 31.62ZM117.847 32L115.067 26.54H113.627V32H110.847V17.82H116.387C117.747 17.82 118.84 18.2333 119.667 19.06C120.493 19.8867 120.907 20.9267 120.907 22.18C120.907 23.1667 120.633 24.02 120.087 24.74C119.553 25.4467 118.82 25.9333 117.887 26.2L120.927 32H117.847ZM113.627 24.16H115.867C116.56 24.16 117.1 23.98 117.487 23.62C117.887 23.26 118.087 22.7867 118.087 22.2C118.087 21.6 117.887 21.12 117.487 20.76C117.1 20.4 116.56 20.22 115.867 20.22H113.627V24.16ZM125.513 29.14C126.006 29.6333 126.6 29.88 127.293 29.88C127.986 29.88 128.573 29.6333 129.053 29.14C129.546 28.6467 129.793 27.96 129.793 27.08C129.793 26.2 129.546 25.5133 129.053 25.02C128.573 24.5267 127.986 24.28 127.293 24.28C126.6 24.28 126.006 24.5267 125.513 25.02C125.033 25.5133 124.793 26.2 124.793 27.08C124.793 27.96 125.033 28.6467 125.513 29.14ZM123.593 23.34C124.58 22.3533 125.813 21.86 127.293 21.86C128.773 21.86 130 22.3533 130.973 23.34C131.96 24.3267 132.453 25.5733 132.453 27.08C132.453 28.5867 131.96 29.8333 130.973 30.82C130 31.8067 128.773 32.3 127.293 32.3C125.813 32.3 124.58 31.8067 123.593 30.82C122.62 29.8333 122.133 28.5867 122.133 27.08C122.133 25.5733 122.62 24.3267 123.593 23.34ZM137.133 32H134.553V17.52H137.173V23.24C137.413 22.8667 137.793 22.5533 138.313 22.3C138.846 22.0333 139.459 21.9 140.153 21.9C141.553 21.9 142.659 22.38 143.473 23.34C144.286 24.3 144.693 25.5333 144.693 27.04C144.693 28.5467 144.266 29.7933 143.413 30.78C142.559 31.7533 141.439 32.24 140.053 32.24C138.706 32.24 137.733 31.76 137.133 30.8V32ZM141.333 29.12C141.799 28.6133 142.033 27.9267 142.033 27.06C142.033 26.1933 141.799 25.5133 141.333 25.02C140.879 24.5267 140.299 24.28 139.593 24.28C138.886 24.28 138.299 24.5267 137.833 25.02C137.366 25.5133 137.133 26.1933 137.133 27.06C137.133 27.9267 137.366 28.6133 137.833 29.12C138.313 29.6133 138.899 29.86 139.593 29.86C140.299 29.86 140.879 29.6133 141.333 29.12ZM149.439 29.14C149.932 29.6333 150.526 29.88 151.219 29.88C151.912 29.88 152.499 29.6333 152.979 29.14C153.472 28.6467 153.719 27.96 153.719 27.08C153.719 26.2 153.472 25.5133 152.979 25.02C152.499 24.5267 151.912 24.28 151.219 24.28C150.526 24.28 149.932 24.5267 149.439 25.02C148.959 25.5133 148.719 26.2 148.719 27.08C148.719 27.96 148.959 28.6467 149.439 29.14ZM147.519 23.34C148.506 22.3533 149.739 21.86 151.219 21.86C152.699 21.86 153.926 22.3533 154.899 23.34C155.886 24.3267 156.379 25.5733 156.379 27.08C156.379 28.5867 155.886 29.8333 154.899 30.82C153.926 31.8067 152.699 32.3 151.219 32.3C149.739 32.3 148.506 31.8067 147.519 30.82C146.546 29.8333 146.059 28.5867 146.059 27.08C146.059 25.5733 146.546 24.3267 147.519 23.34ZM161.72 19.22V22.16H163.7V24.52H161.72V28.64C161.72 29.0533 161.813 29.3467 162 29.52C162.186 29.6933 162.48 29.78 162.88 29.78C163.24 29.78 163.513 29.7533 163.7 29.7V31.9C163.313 32.06 162.813 32.14 162.2 32.14C161.24 32.14 160.48 31.8733 159.92 31.34C159.36 30.7933 159.08 30.0467 159.08 29.1V24.52H157.3V22.16H157.8C158.293 22.16 158.666 22.02 158.92 21.74C159.186 21.4467 159.32 21.0667 159.32 20.6V19.22H161.72Z" fill="#0744F2" />
                    <defs>
                        <clipPath id="clip0_1725_18682">
                            <rect width="60" height="50" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#btn" style="background-color: white;">
                <i class="fa-solid fa-bars" style="color: gray;"></i>
            </button>
            <div class="collapse navbar-collapse header_nav_list" id="btn">
                <ul class="navbar-nav ms-auto">
                    <li class=" nav-item active"><a href="{{route('index')}}" class=" mx-2">Home</a></li>
                    <li class=" nav-item"><a href="{{route('tutorial')}}" class="mx-2">Tutorial</a></li>
                    <li class=" nav-item"><a href="{{route('forum')}}" class="mx-2">Forum</a></li>
                    <li class="  nav-item"><a href="" class="mx-2">Blog</a></li>
                    <li class="  nav-item dropdown">
                        <a href="#" class="mx-2 dropbtn ">Demo Sites</a>
                        <div class="dropdown-content">
                            <a href="{{route('basic')}}">Basic Site</a>
                            <a href="{{route('practice')}}">Automation Practice Site</a>
                            <a href="{{route('actions')}}">Automation Actions Site</a>
                            <a href="{{route('ecommerce')}}">Ecommerce Site</a>
                        </div>
                    </li>
                </ul>
                <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="53" height="53" fill="url(#pattern0)" />
                    <defs>
                        <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_1725_18674" transform="scale(0.005)" />
                        </pattern>
                        <image id="image0_1725_18674" width="200" height="200" xlink:href="data:image/png;base64,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" />
                    </defs>
                </svg>
                <?php

                use Illuminate\Support\Facades\Session;

                $name = Session::get('id');
                if ($name) {
                    echo 'xin Chào ', $name;
                }
                $message = Session::get('message');

                ?>

                <button type="button" class="btn btn-outline-primary m-1" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-sigin-out">

                            <!-- Login Form -->
                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="modal-header ">
                                    <h5 class="modal-title">Log in to your <b>Ms.Robot</b> account!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3 input-box">
                                        <i class='bx bx-envelope bx-sm'></i>
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                        <span class="text-danger"></span>
                                    </div>
                                    <div class="mb-3 input-box">
                                        <i class='bx bx-lock bx-sm'></i>
                                        <input type="password" name="pass" class="form-control" placeholder="Password">
                                        <span class="text-danger"></span>
                                    </div>
                                    <button type="submit" name="dangnhap" class="btn btn-primary mx-auto w-100 mb-3">Login</button>

                                    <p style="font-size: 14px; text-align: center;">or <a href="" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#forgotpassModal">Forgot password</a>
                                    </p>
                                </div>
                                <div class="modal-footer ">
                                </div>
                                <p class="text-center">Don't have an account? <a href="#" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#signupModal">Sign up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="forgotpassModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-sigin-out">
                            <!-- forgot pass form-->
                            <form action="">
                                <div class="modal-header ">
                                    <h5 class="modal-title">Forgot password</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3 input-box">
                                        <i class='bx bx-envelope bx-sm'></i>
                                        <input type="text" name="username" class="form-control" id="Username" placeholder="Email">
                                    </div>
                                    <div class="g-recaptcha" data-sitekey="6LcnV_8SAAAAAGBwDp38k-tY1c9sugh27MJqPuO4"></div>
                                    <button type="button" class="btn btn-primary mx-auto w-100 mb-3" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#resetpassModal">Reset password</button>
                                    <p style="font-size: 14px; text-align: center;">or <a href="" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="resetpassModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-sigin-out">
                            <!--signup form -->
                            <form action="">
                                <div class="modal-header">
                                    <h5 class="modal-title">Reset password</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3 input-box">
                                        <i class='bx bx-lock bx-sm'></i>
                                        <input type="password" name="password" class="form-control" id="Password" placeholder="New password">
                                    </div>
                                    <div class="mb-3 input-box">
                                        <i class='bx bx-lock bx-sm'></i>
                                        <input type="password" name="password" class="form-control" id="Password" placeholder="Verify password">
                                    </div>
                                    <button type="button" class="btn btn-primary mx-auto w-100 mb-3">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
                <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content modal-sigin-out">
                            <!--signup form -->
                            <form action="">
                                <div class="modal-header">
                                    <h5 class="modal-title">Sign Up and Start Learning!</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3 input-box ">
                                        <i class='bx bx-envelope bx-sm'></i>
                                        <input type="text" name="username" class="form-control" id="Username" placeholder="Email">
                                    </div>
                                    <div class="mb-3 input-box">
                                        <i class='bx bx-lock bx-sm'></i>
                                        <input type="password" name="password" class="form-control" id="Password" placeholder="Password">
                                    </div>
                                    <div class="mb-3 input-box">
                                        <i class='bx bx-lock bx-sm'></i>
                                        <input type="password" name="password" class="form-control" id="Password" placeholder="Verify password">
                                    </div>
                                    <p style="font-size: 14px; color: #0744F2;">Please use this email & password to login our Demo Sites
                                        when using Selenium Test Automation.</h6>
                                    <div class="mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="remember" required>
                                        <label style="font-size: 14px;" class="form-check-label" for="remember">Yes! I want to receive
                                            emails with Selenium Tips and ebook!</label>
                                    </div>

                                    <button type="button" class="btn btn-primary mx-auto w-100 mb-3">Sign up</button>

                                    <p style="font-size: 12px; text-align: center;">By signing up, you agree to our <b>Terms of Use</b>
                                        and <b>Privacy Policy</b>.</p>
                                </div>
                                <div class="modal-footer ">
                                </div>
                                <p class="text-center">Already have an account?<a href="#" data-bs-dismiss="modal" aria-label="Close" data-bs-toggle="modal" data-bs-target="#loginModal">Log In,</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    @yield('body')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col col-lg-3  col-sm-12">
                    <h4>TUTORIAL</h4>
                    <ul>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Selenium (Java)</a></li>
                        <li><a href="#">Selenium Automation Framework</a></li>
                        <li><a href="#">Docker for Selenium</a></li>
                        <li><a href="#">TestNG</a></li>
                        <li><a href="#">SmartVent Synergy2</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-3  col-sm-12">
                    <br>
                    <br>
                    <br>
                    <ul>
                        <li><a href="#">Jenkins</a></li>
                        <li><a href="#">Git</a></li>
                        <li><a href="#">Github</a></li>
                        <li><a href="#">Maven</a></li>
                        <li><a href="#">Log4j</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-3  col-sm-12">
                    <h4>DEMO SITES</h4>
                    <ul>
                        <li><a href="#">Basic Demo Site</a></li>
                        <li><a href="#">Automation Practice Site</a></li>
                        <li><a href="#">Automation Action Site</a></li>
                        <li><a href="#">E-commerce Demo Site</a></li>
                    </ul>
                </div>
                <div class="footer-col col-lg-3  col-sm-12">
                    <h4>USEFUL LINKS</h4>
                    <ul>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bottom-bar ">
            <div class="container">
                <p>© 2020 MS.Robot Corp.</p>
                <div>
                    <i class="fa-brands fa-twitter fa-xl"></i>
                    <i class="fa-brands fa-square-facebook fa-"></i>
                </div>
            </div>
        </div>
    </footer>


    <!-- captcha -->
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Boxicon -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- js swipper slide -->
    <script src="front/js/swiper-bundle.min.js"></script>
    <!-- js swipper slide -->
    <script src="front/js/main.js"></script>
    <!-- js bootstrap-->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
</body>

</html>

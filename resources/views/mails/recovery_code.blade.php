<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>email</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>


<style>
    *, ::after, ::before {
        box-sizing: border-box;
    }
    a:link {
        text-decoration: none;
    }

    body {
        text-align: right;
        margin: 0;
        direction: rtl;
    }
    .email-page{
        background-color: #24272C;
        padding: 20px;

    }
    header div.email-logo-box {
        margin: auto;
        width: fit-content;
    }
    header div.email-logo-box img {
        width: 100%;
    }

    footer {
        background-color: #2A3036;
        padding: 15px;
        display: flex;
        width: 100%;
        position: relative;
        clear: both;
        justify-content: space-around;
        color: white;
        flex-wrap: wrap;
    }

    footer .address .footer-title, footer .phone-number .footer-title {
        display: flex;
        margin-bottom:20px;
        /*justify-content: space-around;*/
        align-items: center;
        font-size: 16px;


    }

    footer .address .footer-title span, footer .phone-number .footer-title span {
        margin-right: 5px;

    }

    footer .address .inner-title, footer .phone-number .inner-title {
        font-size: 14px;
        margin-bottom: 2px;
    }

    footer .address {
        display: flex;
        flex-direction: column;
        max-width: 500px;

    }
    footer .address .des-address {
        font-size: 12px;
    }
    footer .address .des-address:last-child {
        margin-bottom: 35px;
    }

    footer .phone-number {
        display: flex;
        flex-direction: column;
    }

    footer .phone-number > div {
        margin: auto;
        width: fit-content;
    }
    footer .phone-number > div a {
        font-size: 12px;
        color: #F1AD10;
    }
    .email-content{
        margin: auto;
        width: fit-content;
        color: white;
        margin-top: 50px;
        font-size: 20px;
        padding-bottom: 70px;
    }
    .email-content .password{
        margin: auto;
        width: fit-content;
        color: #F1AD10;

    }
    @media only screen and (max-width: 992px){
        footer .address {

            max-width: 300px;
        }
    }
    @media only screen and (max-width: 575px){
        footer{
            justify-content: space-between;

        }
    }
</style>
<body>
<div class="email-page">
    <header>
        <div class="email-logo-box"><img src="https://www.livenegah.ir/images/logo-email.png" alt="danasarmaye"></div>

    </header>
    <div class="email-content" >
        <p> سلام  {{$fullname}}</p>
        <p>کد احراز هویت شما</p>
        <p class="password">{{$code}}</p>
    </div>

</div><footer>
    <div class="address">
        <div class="footer-title"><span class="icon-pin"></span><span>آدرس</span></div>
        <div><p class="inner-title">شیراز</p></div>
        <div><p class="des-address">شیراز - خیابان فلسطین (باغشاه) - نبش کوچه 5 - ساختمان داناسرمایه</p></div>
        <div><p class="inner-title">تهران</p></div>
        <div><p class="des-address">تهران - خیابان شریعتی، حدفاصل مترو شریعتی و سه راه میرداماد، نبش کوچه منظر نژاد(نیام)،پلاک ۶۲،ساختمان
                دانا سرمایه</p></div>

    </div>
    <div class="phone-number">
        <div class="footer-title"><span class="icon-call"></span><span>شماره تماس</span></div>
        <div><p class="inner-title">شیراز</p></div>
        <div><a href="tel:02122863687">071-32321370</a></div>
        <div><a href="tel:02122863687">09171010050</a></div>
        <div><p class="inner-title">تهران</p></div>
        <div><a href="tel:02122863687">021-22863687</a></div>
    </div>


</footer>
</body>
</html>

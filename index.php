<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" href="https://s8.uupload.ir/files/logo_nmy4.png">
      <meta name="theme-color" content="#4CAF50">
  <link rel="manifest" href="/manifest.json">
  <link rel="icon" href="/icons/icon-192x192.png">
    <title>DWAI | اولین و برترین سیستم چت علمی ایران</title>

    <!-- لینک برای پیش‌اتصال به Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- لینک برای بارگذاری فونت Vazirmatn -->
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">

    <style>
     /* استایل پاپ‌آپ */
        #popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgb(13 12 16 / 84%);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    backdrop-filter: blur(5px);
}

        #popup .popup-content {
            background: white;
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            width: 80%;
            max-width: 400px;
        }

        #popup .popup-content h2 {
            margin-bottom: 10px;
            color: #3F51B5;
        }

        #popup .popup-content button {
            padding: 10px 20px;
            background: #3F51B5;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-family: 'Vazirmatn';
            font-size: 16px;
        }

        #popup .popup-content button:hover {
            background: #2e3a7a;
        }

        body {
            font-family: 'Vazirmatn';
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        #chat-container {
    flex: 1;
    overflow-y: auto;
    padding: 40px;
    margin-right: 70px;
}


        .message {
            margin: 10px 0;
            padding: 10px 15px;
            border-radius: 15px;
            max-width: 70%;
        }

        .user-message {
    background-color: #3F51B5;
    color: white;
    align-self: flex-end;
    font-weight: 600;
    width: fit-content;
    box-shadow: 0px 0px 13px #673ab745;
    border-radius: 40px;
    margin-top: 30px;
    padding: 10px 20px;
}

        .bot-message {
    background-color: #ddd;
    color: black;
    align-self: flex-start;
    padding: 25px;
    border-radius: 20px 5px 20px 20px;
    margin-right: 30px;
    width: 90%;
}

        #input-container {
    display: flex;
    padding: 10px;
    background: #fff;
    border-top: 1px solid #ccc;
    height: 50px;
}

        #keyword {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    margin-right: 10px;
    font-size: 16px;
    font-family: 'Vazirmatn';
}
#keyword:focus {
    border-color: purple; /* تغییر رنگ حاشیه به بنفش */
    outline: none; /* حذف خطوط فوکوس پیش‌فرض */
        border-width: 2px;
    border-color: #3F51B5;
}
#send-btn {
    padding: 10px 20px;
    background-color: #3F51B5;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    margin-right: 10px;
    font-weight: 800;
    font-family: 'Vazirmatn';
    width: 10%;
    font-size: 15px;
}

        #send-btn:hover {
            background-color: #2e3a7a;
        }
img.logo-welcome {
    width: 50%;
    filter: hue-rotate(121deg);
}

        /* سایدبار */

        .sidebar {

    background-color: #F9F9F9;
    display: flex;
    flex-direction: column;
    padding: 20px;
    width: 18%;
    overflow-y: auto;
    box-shadow: -2px 0px 5px rgba(0, 0, 0, 0.1);
    border-radius: 40px 0px 0px 0px;
    z-index: 2;
    margin-top: 10px;
}

        .header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .logo {
            width: 35px;
            border-radius: 15px;
            margin-left: 10px;
        }

        .chat-title {
            font-size: 20px;
            font-weight: bold;
            color: #0d0d0d;
        }

        .battery {
    background-color: #ffffff;
    padding: 5px 10px;
    border-radius: 7px;
    font-size: 11px;
    margin-top: 5px;
    margin-right: 15px;
}
.nav-items {
    width: 100%;
    padding-top: 20px;
}
.nav-items a {
    text-decoration: none;
    color: gray;
    margin: 15px;
    font-size: 15px;
    font-weight: 300;
    transition: color 0.3s, font-weight 0.3s; /* برای انیمیشن */
}

.nav-items a:hover {
    color: black;
    font-weight: 500;
}
.nav-items-lang a {
    text-decoration: none;
    color: #1583ad;
    margin: 35px;
    font-size: 15px;
    font-weight: 300;
    transition: color 0.3s, font-weight 0.3s;
    background-color: #ebedff;
    padding: 7px;
    border-radius: 10px;
    box-shadow: 1px 3px 0px 0px #ffffff;
}

.nav-items-lang a:hover {
    color: #1977a1;
    font-weight: 500;
    background-color: #dfeaf7fa;
}
        .explore a {
            color: #37443d;
            text-decoration: none;
            font-size: 18px;
            display: block;
            margin-bottom: 20px;
        }

        .chat-list {
            list-style: none;
            padding: 0;
            margin: 0;
            flex-grow: 1;
            overflow-y: auto;
        }

        .chat-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 7px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .chat-item.active {
            background-color: #ececec;
            color: #37443d;
        }

        .chat-icon {
            width: 40px;
            margin-left: 10px;
        }

        .chat-name {
            flex-grow: 1;
            color: #37443d;
            text-decoration: none;
        }

        /* استایل بخش چت */
        .chat-area {
            flex: 1;
            display: flex;
            flex-direction: column;
            background-color: #f4f4f9;
        }
        #main-container {
    display: flex; /* چیدمان افقی */
    height: 100vh; /* ارتفاع تمام صفحه */
}
.sidebar {
    width: 17%;
    overflow-y: auto;
    box-shadow: -2px 0px 5px rgba(0, 0, 0, 0.1);
}
#chat-area {
    width: 75%; /* تنظیم عرض بخش چت */
    display: flex; /* ایجاد چیدمان عمودی در داخل بخش چت */
    flex-direction: column;
}


.profile-pic {
  width: 40px; /* اندازه دایره */
  height: 40px;
  border-radius: 50%; /* گرد کردن تصویر */
  margin-left: 10px; /* فاصله از پیام */
  border: 2px solid #ddd; /* قاب دور تصویر */
}


/*استایل های گوشی موبایل*/
@media only screen and (max-width: 768px) {

    .sidebar {
        display: none;
    }
        #send-btn {
        width: 20%;
        border-radius: 15px;
        background-color:#513E8B;
    }
    .mobile-header {
        height: 50px;
        backdrop-filter: blur(10px);
        background-color: #ffffffc7;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        text-align: center;
        padding: 10px 0;
        z-index: 1000;
    }
    .header-title {
        width:70%;
    }
    #chat-container{
        margin-top:20px;
        padding:0px;
        padding-top:30px;
        margin-right:20px;
    }
    .user-message{
        background-color:#513E8B;
        margin:3px;
        margin-top:20px;
    }
    #input-container {
    display: flex;
    padding: 10px;
    background: #fff;
    border-top: 1px solid #ccc;
    height: 50px;
    position: fixed; /* چسباندن به پایین */
    bottom: 0; /* قرار گرفتن در پایین صفحه */
    left: 0;
    width: 98%;
    z-index: 1000; /* برای اطمینان از اینکه بالاتر از دیگر المان‌ها قرار گیرد */
   }
   .bot-message{
       margin-bottom:120px;
   }
   #keyword{
       border-radius:15px;
   }
   #keyword:focus{
       border-color: #3F51B5;
   }
   .chat-area{
       padding-top: 10px;
   }

}

@media only screen and (min-width: 769px) {
    .mobile-header {
        display: none;
    }
    .header-title {
        display: none;
    }
}

        /* انیمیشن برای پیام‌های ارسال شده */
@keyframes slideIn {
    0% {
        transform: translateY(100%); /* از سمت راست خارج می‌شود */
        opacity: 0;
    }
    100% {
        transform: translateY(0); /* به جای اصلی خود می‌رسد */
        opacity: 1;
    }
}

.message.user-message {
    animation: slideIn 0.5s ease-out;
    transform: translateY(0%); /* از سمت راست صفحه می‌آید */
}
.bot-message {
  position: relative;
}

.message-wrapper {
    display: flex
;
    justify-content: space-between;
    flex-direction: column;
    align-items: flex-start;
}

.copy-button {
    background: none;
    border: none;
    cursor: pointer;
    color: #5c5c5c;
    font-size: 16px;
    margin-left: 10px;
    transition: color 0.3s ease;
    margin-top: 20px;
    background-color: #91919159;
    padding: 7px;
    width: 35px;
    border-radius: 10px;
}


.copy-button:hover {
    color: #434343;
    background-color: #a3a3a336;
}

.copy-button.copied {
    color: #28a745;
}
/* انیمیشن تایپ */
@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 100%;
    }
}

.typing-animation {
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    width: 0;
    border-right: 3px solid;
    animation: typing 3s steps(30) 1s 1 normal both;
    font-family: 'Vazirmatn', sans-serif; /* فونت دلخواه */
}

.copy-button-none{
    display:none;
}

.message-text-default{
   font-weight:400;
}
.img-ahura {
    width: 3%;
    background-color: #fbfbfb;
    padding: 5px;
    border-radius: 20px;
    margin-bottom: -35px;
    z-index: 999;
    position: relative;
}
    </style>
</head>
<body>

<div id="main-container">
    <!-- بخش چت -->
    <div class="chat-area">
      <!-- پاپ‌آپ -->
    <div id="popup" style="display: none;">
        <div class="popup-content">
            <img src="https://s8.uupload.ir/files/10402200_11zon_suek.png" class="logo-welcome" alt="Logo">
            <h2>خوش آمدید!</h2>
            <p>
                DWAI یک سیستم چت هوش مصنوعی رایگان است که به کاربران امکان می‌دهد سوالات خود را با استفاده از کلیدواژه‌های مرتبط بپرسند. این سرویس از زیرمجموعه‌های شرکت اهورا تکنولوژی است و پاسخ‌های دقیق و علمی به کاربران ارائه می‌دهد.
            </p>
            <button onclick="closePopup()">شروع چت</button>
        </div>
    </div>
    <header class="mobile-header">
    <img class="header-title" src="https://s8.uupload.ir/files/wiki-logo_gotz.png">
</header>
<div id="main-container">
        <aside class="sidebar">
        <div class="header">
            <img src="https://s8.uupload.ir/files/logo_nmy4.png" alt="لوگو" class="logo"> 
            <h1 class="chat-title">توربو چت‌بات</h1>
            <span class="battery">نسخه 4 اهورا</span>
        </div>
        <div class="explore">
            <a href="#">کاوش <i class="icon-home"></i></a>
        </div>
        <ul class="chat-list">
            <li class="chat-item active">
                <img src="https://s8.uupload.ir/files/wiki_o1a5.png" alt="Bot" class="chat-icon">
                <a href="https://ahuratoolbox.ir/dwai/" class="chat-name">دانشنامه آزاد</a>
            </li>
            <li class="chat-item">
                <img src="https://ahuratoolbox.ir/wp-content/uploads/2024/08/gpt4.webp" alt="Bot" class="chat-icon">
                <a class="chat-name" href="https://ahuratoolbox.ir/future/">GPT4</a>
            </li>
        </ul>
        <div class="nav-items-lang">
            <a href="https://ahuratoolbox.ir/dwai/en/">English</a>
            <a href="https://ahuratoolbox.ir/dwai/ar/" >العربیة</a>
        </div>
                <div class="nav-items">
            <a href="https://docs.ahuratoolbox.ir/description/ahura-artificial-intelligence-chatbot-version-4-gpt/" target="_blank">راهنمایی</a>
            <a href="https://ahuratoolbox.ir/" target="_blank">شرکت اهورا تکنولوژی</a>
        </div>
    </aside>
<!-- بخش چت -->
<div class="chat-area">
    <div id="chat-container">
                  <img class="img-ahura" src="https://s8.uupload.ir/files/logo_nmy4.png">
        <div class="message bot-message">
            <div class="message-wrapper">
                <span class="message-text-default">
                    سلام! 👋  
                    من DWAI هستم، دستیار هوشمند شما از شرکت اهورا تکنولوژی.  
                    هر سوالی داری یا به کمک نیاز داری، اینجا هستم تا راهنماییت کنم.  
                    کافیه کلیدواژه موردنظرت رو وارد کنی تا بهترین پاسخ‌ها رو بهت ارائه بدم. 😊  
                </span>
                <div class="tools">
                    <!-- دکمه کپی -->
                    <button class="copy-button-none">
                        <i class="fa fa-copy"></i>
                    </button>
                    <!-- دکمه پخش صوتی -->
                    <button class="copy-button" onclick="playAudio()">
                        <i class="fa fa-volume-up"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div id="input-container">
        <input type="text" id="keyword" placeholder="کلیدواژه را وارد کنید...">
        <button id="send-btn" onclick="fetchWikipedia()">ارسال</button>
    </div>
</div>
<script>

// تابع اضافه کردن پیام به چت
function addMessage(message, type) {
    const messageContainer = document.createElement('div');
    messageContainer.classList.add('message', type);

    if (type === 'bot-message') {
        // استفاده از انیمیشن تایپ برای پیام ربات
        const messageWrapper = document.createElement('div');
        messageWrapper.classList.add('message-wrapper');

        const messageText = document.createElement('span');
        messageText.classList.add('message-text');

        // ایجاد یک div برای دکمه‌ها
        const buttonContainer = document.createElement('div');
        buttonContainer.classList.add('button-container'); // کلاس برای استایل‌دهی

        // دکمه کپی
        const copyButton = document.createElement('button');
        copyButton.classList.add('copy-button');
        copyButton.innerHTML = `<i id="icon-copy" class="fa fa-copy"></i>`; // آیکن کپی اولیه

        // دکمه پخش فایل صوتی
        const audioButton = document.createElement('button');
        audioButton.classList.add('copy-button'); // همان کلاس برای آیکن صوتی
        audioButton.innerHTML = `<i id="icon-copy" class="fa fa-volume-up"></i>`; // آیکن صوتی

        // رویداد کلیک برای کپی کردن
        copyButton.addEventListener('click', () => {
            let textToCopy = message;
            const siteName = "\n\n🚀این متن توسط هوش مصنوعی DWAI متعلق به وبسایت جعبه ابزار آنلاین اهورا به نشانی Ahuratoolbox.ir/dwai ساخته شده است.";
            textToCopy += siteName;

            // کپی کردن متن جدید به کلیپبورد
            navigator.clipboard.writeText(textToCopy).then(() => {
                copyButton.innerHTML = `<i class="fa fa-check"></i>`; // تغییر آیکن به تیک
                copyButton.classList.add('copied');

                // بازگشت به آیکن اصلی بعد از 2 ثانیه
                setTimeout(() => {
                    copyButton.innerHTML = `<i class="fa fa-copy"></i>`;
                    copyButton.classList.remove('copied');
                }, 2000);
            });
        });

        // رویداد کلیک برای پخش فایل صوتی
        audioButton.addEventListener('click', () => {
            const audio = new Audio('https://ahuratoolbox.ir/wp-content/uploads/2024/08/future.wav');
            audio.play(); // پخش فایل صوتی
        });

        // اضافه کردن دکمه‌ها به container
        buttonContainer.appendChild(copyButton);
        buttonContainer.appendChild(audioButton);

        // فراخوانی انیمیشن تایپ برای پیام ربات
        typeMessage(message, messageText); // فراخوانی تابع تایپ کردن

        messageWrapper.appendChild(messageText);
        messageWrapper.appendChild(buttonContainer); // اضافه کردن container دکمه‌ها به پیام

        messageContainer.appendChild(messageWrapper);
        document.getElementById('chat-container').appendChild(messageContainer);
        scrollToBottom();
    } else {
        messageContainer.textContent = message; // فقط متن ساده برای کاربر
        document.getElementById('chat-container').appendChild(messageContainer);
        scrollToBottom();
    }
}

// تابع انیمیشن تایپ
function typeMessage(message, messageContainer) {
    const chatBox = document.getElementById('chat-container');
    let index = 0;

    disableInput(); // غیرفعال کردن ورودی و دکمه ارسال

    // تابع برای تایپ کردن پیام
    function typing() {
        if (index < message.length) {
            messageContainer.textContent += message.charAt(index);
            index++;
            setTimeout(typing, 10); // تأخیر برای هر کاراکتر
        } else {
            scrollToBottom(); // اسکرول به پایین پس از اتمام انیمیشن
            enableInput(); // فعال کردن ورودی و دکمه ارسال
        }
    }

    typing(); // شروع انیمیشن تایپ
    chatBox.appendChild(messageContainer);
    scrollToBottom();
}

// اسکرول به انتهای چت
function scrollToBottom() {
    const chatContainer = document.getElementById('chat-container');
    chatContainer.scrollTop = chatContainer.scrollHeight;
}

// نمایش لودر
function showLoader() {
    const chatContainer = document.getElementById('chat-container');
    const loader = document.createElement('div');
    loader.id = 'loader';
    loader.textContent = 'درحال فکر کردن...';
    loader.style.color = '#888';
    loader.style.textAlign = 'center';
    loader.style.margin = '10px';
    chatContainer.appendChild(loader);
    scrollToBottom();
}

// مخفی کردن لودر
function hideLoader() {
    const loader = document.getElementById('loader');
    if (loader) loader.remove();
}

// غیرفعال کردن ورودی و دکمه ارسال
function disableInput() {
    const inputField = document.getElementById('keyword');
    const sendButton = document.getElementById('send-btn');
    inputField.disabled = true;
    inputField.style.opacity = '0.5';
    sendButton.disabled = true;
    sendButton.style.opacity = '0.5';
}

// فعال کردن ورودی و دکمه ارسال
function enableInput() {
    const inputField = document.getElementById('keyword');
    const sendButton = document.getElementById('send-btn');
    inputField.disabled = false;
    inputField.style.opacity = '1';
    sendButton.disabled = false;
    sendButton.style.opacity = '1';
}

// کلمات کلیدی و پاسخ‌ها
const keywordResponses = {
    "سلام": "سلام! 👋 من DWAI هستم. چطور می‌توانم به شما کمک کنم؟",
    "خوبی؟": "من خوبم، مرسی که پرسیدی! 😊 تو چطوری؟",
    "اسم تو چیه؟": "اسم من DWAI هست. دستیار هوشمند شما از شرکت اهورا تکنولوژی.",
    "خداحافظ": "خداحافظ! امیدوارم دوباره صحبت کنیم! 👋"
};

// بررسی پیام‌های ورودی
function handleKeywordResponse(message) {
    for (let keyword in keywordResponses) {
        if (message.includes(keyword)) {
            addMessage(keywordResponses[keyword], 'bot-message');
            return;
        }
    }
    fetchWikipedia(); // اگر هیچ کلمه کلیدی پیدا نشد، به جستجو ادامه بده
}

// تابع جستجو و ارسال پیام به سایت
function fetchWikipedia() {
    const keyword = document.getElementById('keyword').value.trim();

    if (!keyword) {
        alert('لطفاً یک کلیدواژه وارد کنید.');
        return;
    }

    if (keyword.length > 20) {
        alert('کلیدواژه نباید بیشتر از 20 کارکتر باشد.');
        return;
    }

    document.getElementById('keyword').value = ''; // پاک کردن فیلد ورودی
    addMessage(keyword, 'user-message'); // اضافه کردن پیام کاربر به چت

    const chatBox = document.getElementById('chat-container');
    showLoader(); // نمایش لودر

    const searchUrl = `https://fa.wikipedia.org/w/api.php?action=query&list=search&format=json&srsearch=${encodeURIComponent(keyword)}&origin=*`;

    fetch(searchUrl)
        .then(response => response.json())
        .then(data => {
            const searchResults = data.query.search;
            if (searchResults.length === 0) {
                addMessage('نتیجه‌ای برای این کلیدواژه پیدا نشد.', 'bot-message');
            } else {
                const pageTitle = searchResults[0].title;
                const pageUrl = `https://fa.wikipedia.org/w/api.php?action=query&prop=extracts&exintro&format=json&explaintext=false&titles=${encodeURIComponent(pageTitle)}&origin=*`;

                fetch(pageUrl)
                    .then(response => response.json())
                    .then(pageData => {
                        const pages = pageData.query.pages;
                        const pageId = Object.keys(pages)[0];

                        if (pageId === "-1") {
                            addMessage('صفحه‌ای برای این کلیدواژه پیدا نشد.', 'bot-message');
                        } else {
                            const extract = pages[pageId].extract;
                            addMessage(extract, 'bot-message');
                        }
                    })
                    .catch(error => {
                        console.error('خطا در دریافت محتوای صفحه:', error);
                        addMessage('خطایی رخ داد. لطفاً دوباره تلاش کنید.', 'bot-message');
                    });
            }
        })
        .catch(error => {
            console.error('خطا در جستجو:', error);
            addMessage('خطایی رخ داد. لطفاً دوباره تلاش کنید.', 'bot-message');
        })
        .finally(() => {
            hideLoader();
        });
}

// ارسال پیام با فشار Enter
document.getElementById('keyword').addEventListener('keydown', function (event) {
    if (event.key === 'Enter' && !event.shiftKey) {
        event.preventDefault();
        handleKeywordResponse(document.getElementById('keyword').value.trim());
    }
});

// ارسال پیام با دکمه ارسال
document.getElementById('send-btn').addEventListener('click', function () {
    fetchWikipedia(); // فراخوانی تابع جستجو
});

// تابع پخش فایل صوتی
function playAudio() {
    const audio = new Audio('https://ahuratoolbox.ir/wp-content/uploads/2024/08/Hello-ahura.wav');
    audio.play(); // پخش فایل صوتی
}

</script>



</body>
</html>

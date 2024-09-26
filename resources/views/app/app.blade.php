<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>AspireCoin</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="header">
        
    </div>

    <div class="exclusive-access">
        <p>Aspirecoindan ekskluziv loyiha <img src="{{ asset('img/logo.png') }}" width="35" height="30" alt="">
        </p>
    </div>

    <center> <div class="main-content">
        <div class="cats-ba blance">
            <h1 >
                <form id="coinForm" action="{{ route('savecoin') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="1">
                    @foreach ($coins as $coin)
                    <input class="totalnumber" type="number" id="total" value="{{ $coin->total }}" name="total" readonly  />
                    @endforeach
                    <input class="hidden-submit" type="submit" value="ok">
                </form>
            </h1>
            <div class="stats">
                <div>Mukofotlar<br>+2.2k</div>
                <div>Vazifalar<br>+1.9k</div>
                <div>Referallar<br>0</div>
            </div>
        </div>
    </center>
<br>
<br>
        <div class="container">
            <div class="progress-bar" id="progressBar" style="width: 100%;"></div>
        </div>

        <div class="progress-text" id="progressText" style="position: relative; display: flex; justify-content: center; margin-top: 5px;">100</div>

        <div class="tap">
            <img src="{{ asset('img/aspire.png') }}"  alt="Aspire" width="250px" height="250px" id="aspire-image">
        </div>


        <div class="tasks">
            <h2>Kundalik Vazifalar</h2>
            <div class="task">
                <span><img width="20" height="20" src="https://img.icons8.com/ios/50/telegram.png" alt="telegram"/> Telegram kanalga obuna</span>
                <span>+300 ASP</span>
                <button class="check-button">Bajarish</button>
            </div>
        </div>


         <div class="tasks"></div>
            <h2></h2>
            <div class="task">
                <span><img width="20" height="20" src="https://img.icons8.com/external-dreamstale-lineal-dreamstale/32/external-camera-photography-dreamstale-lineal-dreamstale-18.png" alt="external-camera-photography-dreamstale-lineal-dreamstale-18"/> Instagram sahifaga obuna</span>
                <span>+500 ASP</span>
                <button class="check-button">Bajarish</button>
            </div>
        </div>

        
    </div>

    



    <div class="bottom-nav">
        
        <a href=""><button><img width="20" height="20" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1"/><br>Home</button></a>
        <a href="leader.html"><button><img width="25" height="25" src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-vitaly-gorbachev/60/external-cup-award-vitaliy-gorbachev-lineal-vitaly-gorbachev-11.png" alt="external-cup-award-vitaliy-gorbachev-lineal-vitaly-gorbachev-11"/><br>Peshqadamlar</button></a>
        <button><img width="30" height="30" src="https://img.icons8.com/dotty/80/friends.png" alt="friends"/><br>Referallar</button>
        <button><img width="30" height="30" src="https://img.icons8.com/badges/48/tasklist.png" alt="tasklist"/><br>Vazifalar</button>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/savecoin.js') }}"></script>



</body>
</html>

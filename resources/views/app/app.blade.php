<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>AspireCoin</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/baraban.css') }}">
</head>
<body>
    <div class="header"></div>

    <div class="exclusive-access">
        <p>Aspirecoindan ekskluziv loyiha <img src="{{ asset('img/logo.png') }}" width="35" height="30" alt=""></p>
    </div>

    <center>
        <div class="main-content">
            <div class="cats-ba blance">
                <h1>
                    @foreach ($coins as $coin)
                        {{ $coin->total }}
                        <p id="updated" data-updated="{{ $coin->updated_at }}"></p>
                    @endforeach
                </h1>
                <div class="stats">
                    <div>Mukofotlar<br>+2.2k</div>
                    <div>Vazifalar<br>+1.9k</div>
                    <div>Referallar<br>0</div>
                </div>
            </div>
        </div>
    </center>
    <br><br>

    <div class="container">
        <div class="wheel-container">
            <div class="arrow">↑</div>
            <div class="wheel" id="wheel">
                <div class="prize prize-1">50</div>
                <div class="prize prize-2">400</div>
                <div class="prize prize-3">350</div>
                <div class="prize prize-4">300</div>
                <div class="prize prize-5">250</div>
                <div class="prize prize-6">200</div>
                <div class="prize prize-7">150</div>
                <div class="prize prize-8">100</div>
            </div>
        </div>
        <div class="button-container">
            <button id="spinButton">Barabanni Aylantirish</button>
        </div>
        <div class="result" id="result"></div>
    </div>

    <div class="modal" id="myModal">
        <div class="modal-content">
            <p id="modalText">Sovrin: 0 tanga</p>
            <form id="coinForm" action="{{ route('savecoin') }}" method="POST">
                @csrf
                <input type="hidden" name="total" id="coins" value="">
                <input type="hidden" name="user_id" value="1">
                <button type="submit" id="closeModal">OK</button>
            </form>
        </div>
    </div>

    <div class="bottom-nav">
        <a href=""><button><img width="20" height="20" src="https://img.icons8.com/ios/50/home--v1.png" alt="home--v1"/><br>Home</button></a>
        <a href="leader.html"><button><img width="25" height="25" src="https://img.icons8.com/external-vitaliy-gorbachev-lineal-vitaliy-gorbachev/60/external-cup-award-vitaliy-gorbachev-lineal-vitaly-gorbachev-11.png" alt="external-cup-award-vitaliy-gorbachev-lineal-vitaly-gorbachev-11"/><br>Peshqadamlar</button></a>
        <button><img width="30" height="30" src="https://img.icons8.com/dotty/80/friends.png" alt="friends"/><br>Referallar</button>
        <button><img width="30" height="30" src="https://img.icons8.com/badges/48/tasklist.png" alt="tasklist"/><br>Vazifalar</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <script src="{{ asset('js/baraban.js') }}"></script>


    
    
</body>
</html>

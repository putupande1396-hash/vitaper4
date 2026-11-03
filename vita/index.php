<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            transition; background-color 0.4 ease,color 0.4s ease;
            background-color; #f5f5f5;
            color: #353131;
            font-family: Arial;
            margin: 0;
            padding: 20px;
        }
        body.mode-gelap{
            background-color: #1a1a1a;
            color: #e0e0e0;
        }
        .pesan-tersembunyi{
            display: none;
        }
        .pesan-tampil{
            display: block;
            background-color: #d1ffd1;
            color: #179351;
            padding: 10px;

        }
        #btn-tampil{
            margin-top: 15px;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
        }
        #btn-tampil:hover{
            background-color: #37db0e;
        }
        .nav-tema{
            text-align: center;
            mnargin: 20px 0;
        }
        #btn-tema{
            padding: 12px 24px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background-color: #333;
            color: #fff;
            transition: all 0.3s;
        }
        #btn-tema:hover{
            transform: scale(1.05);
        }
        </style>
</head>
<body>
    <div class="nav-tema">
        <button id="btn-tema">Mode Gelap</button>
    </div>
        
    <div id="pesan-sistem" class="pesan-tersembunyi">
        <p>
            <strong>Belajar DOM Javascript dan CSS</strong>
        </P>
    </div>
    <button id="btn-tampil">Tampilkan Pesan </button>

    <script>
        const tmb = document.getElementById("btn-tampil");
        const psn = document.getElementById("pesan-sistem");
        const tmbTema = document.getElementById("btn-tema");

        tmb.addEventListener('click',function(){
            if(psn.classList.contains('pesan-tersembunyi')){
                psn.classList.remove('pesan-tersembunyi');
                psn.classList.add('pesan-tampil');
                tmb.innerText = "Sembunyikan Pesan";
            }else{
                psn.classList.remove('pesan-tampil');
                psn.classList.add('pesan-tersembunyi');
                tmb.innerText = "Tampilkan Pesan";  
            }
        });
        tmbTema.addEventListener('click', function(){
            document.body.classList.toggle('mode-gelap');

            if(document.body.classList.contains('mode-gelap')){
                tmbTema.innerText = "Mode Terang"
            }else{
                tmbTema.innerText = "Mode Gelap"
            }
        });
    </script>
</body>
</html>
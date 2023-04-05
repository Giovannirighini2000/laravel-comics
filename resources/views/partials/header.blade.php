<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style > 
    .justify-content-list {
         gap:35px;
    
     }
    
     .active {
         color: #2a92fa;
     }
    
     .active:after {
         content: "";
         position: absolute;
         top: 59px;
         left: 0;
         right: 0;
         height: 0.5em;
         border-bottom: 3px solid #2a92fa;
    
     }
    
     .pad-header {
         padding-top: 10px;
         padding-bottom: 10px;
     }
    
     .bold {
         font-weight: bold;
     }
    
     .relative-line {
         position: relative;
     }
     .line{
        border-bottom: 3px solid #2a92fa;
        width: 100px;
        
     }
     .pos{
        margin-left: 30px;
     }
     .img{
        width: 90px;
        margin-right: 70px;
        
     }
     </style>

<body>
    <header>
        <div>
            <div class="container">
                <div class="flex center-items pad-header">
                    <img class="img" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                    <nav>
                        <ul class="flex justify-content-list">
                            <li class="upsize relative-line bold">
                                <a href="">Characters</a>
                            </li>
                            <li class="upsize relative-line  bold">
                                <a class="active" href="">comics</a>
                            </li>
                            <li class="upsize relative-line bold">
                                <a href="">movies</a>
                            </li>
                            <li class="upsize relative-line bold">
                                <a href="">tv</a>
                            </li>
                            <li class="upsize relative-line bold">
                                <a href="">games</a>
                            </li>
                            <li class="upsize relative-line bold">
                                <a href="">collectibles</a>
                            </li>
                            <li class="upsize relative-line bold">
                                <a href="">videos</a>
                            </li>
                            <li class="upsize relative-line bold">
                                <a href="">fans</a>
                            </li>
                            <li class="upsize relative-line bold">
                                <a href="">news</a>
                            </li>
                            <li class="upsize relative-line bold">
                                <a href="">shop</a>
                            </li>
                            <li class="upsize relative-line bold line">
                                <a class="pos" href="">Search</a>
                            </li>
                        </ul>
                    </nav>
        
                </div>

            </div>
        </div>
    </header>
    
</body>
</html>
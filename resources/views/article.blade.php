@extends('_layouts.app')
@section('title', 'Новость')
@section('content')
<h1>Новости</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec semper, nisl a euismod cursus, dui justo vehicula eros, vel vestibulum arcu elit scelerisque nunc. Integer mattis, erat id aliquet imperdiet, justo magna egestas tellus, consequat dapibus ex felis quis lectus. Integer id lacus nec velit tristique faucibus. Integer mi est, ullamcorper in elit ut, laoreet consectetur dolor. Aliquam aliquet laoreet quam, at venenatis eros consectetur a. Fusce a nunc facilisis, porta turpis ac, viverra lorem. Curabitur enim turpis, rhoncus sit amet tincidunt id, laoreet nec diam. In molestie orci quis auctor faucibus. Curabitur eget egestas augue. Vestibulum iaculis efficitur lectus at sagittis.</p>
<div class="imageBlock"><img src="http://placehold.it/732x416" alt="" title=""></div>
<p>Duis egestas dapibus nulla, at vehicula lacus cursus ut. Vestibulum dignissim scelerisque ligula a rutrum. Morbi eu faucibus ipsum. Morbi enim lectus, ullamcorper sit amet eleifend a, varius non velit. Maecenas vitae bibendum erat. Nulla imperdiet porta metus. Praesent molestie dapibus vulputate.</p>
<div class="commentsBlock">
    <h2>Комментарии</h2>
    <ul class="parentListComment">
        <li class="comment">
            <div class="avatar">
                <img src="http://placehold.it/89x84" alt="" title="">
            </div>
            <div class="descript">
                <div class="login"><span>Gladson</span></div>
                <div class="dataComment">
                    <div class="date">
                        <span class="day">21</span> <span class="month">декабря,</span> <span class="year">2018</span> в <span class="time">10:30</span>
                    </div>
                </div>
                <div class="text">
                    <p>Advanced Manufacturing is creating disruption as well as opportunities for workers. This infographic expert plores the implications for the jobs of the future.</p>
                </div>
                <div class="buttonComment">
                    <button>Ответить</button>
                </div>
                <div class="formComment">
                    <h2>Оставьте свой комментарий</h2>
                    <form action="handler.php">
                        <div class="message">
                            <p class="label"><span>Ваш комментарий</span></p>
                            <p class="area"><textarea name="messageComment"></textarea></p>
                        </div>
                        <div class="info">
                            <div class="left">
                                <p class="label"><span>Имя <span class="star">*</span></span></p>
                                <input class="field" type="text" name="nameComment" />
                            </div>
                            <div class="rigt">
                                <p class="label"><span>Email <span class="star">*</span></span></p>
                                <input class="field" type="text" name="emailComment" />
                            </div>
                        </div>
                        <button class="sendComment" type="submit">Отправить</button>
                    </form>
                </div>
            </div>
            <ul class="listComment">
                <li class="comment">
                    <div class="avatar">
                        <img src="http://placehold.it/89x84" alt="" title="">
                    </div>
                    <div class="descript">
                        <div class="login"><span>Ezesha Doe</span></div>
                        <div class="dataComment">
                            <div class="date">
                                <span class="day">21</span> <span class="month">декабря,</span> <span class="year">2018</span> в <span class="time">10:30</span>
                            </div>
                        </div>
                        <div class="text">
                            <p>Yet innovation doesn’t just bring disruption, but also opportunity.</p>
                        </div>
                        <div class="buttonComment">
                            <button>Ответить</button>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <li class="comment">
            <div class="avatar">
                <img src="http://placehold.it/89x84" alt="" title="">
            </div>
            <div class="descript">
                <div class="login"><span>THomoas Vendy</span></div>
                <div class="dataComment">
                    <div class="date">
                        <span class="day">21</span> <span class="month">декабря,</span> <span class="year">2018</span> в <span class="time">10:30</span>
                    </div>
                </div>
                <div class="text">
                    <p>Muffin cookie bonbon muffin cupcake cupcake bear claw toffee. Fruitcake sweet roll sweet roll. Jelly beans marshmallow oat cake sweet roll chupa.</p>
                </div>
                <div class="buttonComment">
                    <button>Ответить</button>
                </div>
            </div>
        </li>
    </ul>
    <div class="formComment">
        <h2>Оставьте свой комментарий</h2>
        <form action="handler.php">
            <div class="message">
                <p class="label"><span>Ваш комментарий</span></p>
                <p class="area"><textarea name="messageComment"></textarea></p>
            </div>
            <div class="info">
                <div class="left">
                    <p class="label"><span>Имя <span class="star">*</span></span></p>
                    <input class="field" type="text" name="nameComment" />
                </div>
                <div class="rigt">
                    <p class="label"><span>Email <span class="star">*</span></span></p>
                    <input class="field" type="text" name="emailComment" />
                </div>
            </div>
            <button class="sendComment" type="submit">Отправить</button>
        </form>
    </div>
</div> 
@stop
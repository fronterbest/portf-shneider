@extends('_layouts.app')
@section('title', 'Главная страница')
@section('content')
    <div class="switch">
        <ul>
            <li class="current" key="all"><span>Bсе</span></li>
            <li><span>Лэндинги</span></li>
            <li><span>Магазины</span></li>
            <li><span>Портфолио</span></li>
            <li><span>Адаптивное</span></li>
            <li><span>Разное</span></li>
        </ul>
    </div>
    <div class="contentSwitch">
        <div key="all">
            <ul>
                <li>
                    <a class="image" href="/"><img src="http://placehold.it/450x300" alt="" title=""></a>
                    <a href="/" class="head">Rockstar Music App Design</a>
                    <span class="text">Just try to make a Music app for any singer or company.   If you like it then please...</span>
                </li>
                <li>
                    <a class="image" href="/"><img src="http://placehold.it/450x300" alt="" title=""></a>
                    <a href="/" class="head">Quickbuy Apps Design. E-commerce</a>
                    <span class="text">Just try to make a Music app for any singer or company.  If you like it then please...</span>
                </li>
                <li>
                    <a class="image" href="/"><img src="http://placehold.it/450x300" alt="" title=""></a>
                    <a href="/" class="head">UI design for Atlas applications</a>
                    <span class="text">Just try to make a Music app for any singer or company.  If you like it then please...</span>
                </li>
                <li>
                    <a class="image" href="/"><img src="http://placehold.it/450x300" alt="" title=""></a>
                    <a href="/" class="head">UI design for Atlas applications</a>
                    <span class="text">Just try to make a Music app for any singer or company.  If you like it then please...</span>
                </li>
                <li>
                    <a class="image" href="/"><img src="http://placehold.it/450x300" alt="" title=""></a>
                    <a href="/" class="head">Rockstar Music App Design</a>
                    <span class="text">Just try to make a Music app for any singer or company.  If you like it then please...</span>
                </li>
                <li>
                    <a class="image" href="/"><img src="http://placehold.it/450x300" alt="" title=""></a>
                    <a href="/" class="head">Quickbuy Apps Design. E-commerce</a>
                    <span class="text">Just try to make a Music app for any singer or company.  If you like it then please...</span>
                </li>
                <li>
                    <a class="image" href="/"><img src="http://placehold.it/450x300" alt="" title=""></a>
                    <a href="/" class="head">Rockstar Music App Design</a>
                    <span class="text">Just try to make a Music app for any singer or company.  If you like it then please...</span>
                </li>
                <li>
                    <a class="image" href="/"><img src="http://placehold.it/450x300" alt="" title=""></a>
                    <a href="/" class="head">Rockstar Music App Design</a>
                    <span class="text">Just try to make a Music app for any singer or company.  If you like it then please...</span>
                </li>
                <li>
                    <a class="image" href="/"><img src="http://placehold.it/450x300" alt="" title=""></a>
                    <a href="/" class="head">Rockstar Music App Design</a>
                    <span class="text">Just try to make a Music app for any singer or company.  If you like it then please...</span>
                </li>
            </ul>
            <div class="ranges">
                <ul>
                    <li class="current"><span>1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                </ul>
            </div>
        </div>  
    </div>
@stop
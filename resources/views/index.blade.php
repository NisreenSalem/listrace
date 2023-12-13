<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')

<body>

    @include('includes.header')
    @include('includes.topArea')
    @include('includes.welcome')
    @include('includes.listTopic')


    @include('includes.works')
    @include('includes.places')

    @include('includes.reviews')
    @include('includes.statistics')

    @include('includes.blog')
    @include('includes.contect')


    @include('includes.footer')
    @include('includes.footerJS')



</body>

</html>

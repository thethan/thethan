<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="ut-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $meta_description }}">
    <meta name="author" content="{{ config('blog.author') }}">

    <title>{{ $title or config('blog.title') }}</title>
    {{-- Styles--}}
    <link rel="stylesheet" href="{{ elixir('assets/css/blog.css') }}">
    @yield('styles')

    {{-- HTML5 SHim and Respond.js for IE8 Support --}}
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    {{--@include('blog.partials.page-nav')--}}

    {{--@yield('page-header')--}}
    {{--@yield('content')--}}

    {{--@include('blog.partials.page-footer')--}}

    <div id="skrollr-body">
        <div id="content">
            <div>
                <h1>Fixed nav (desktop only!)</h1>



                <ul id="nav" data-0="position:static;" data-50-top="position:fixed;top:0;" data-edge-strategy="set">
                    <li>foo</li>
                    <li>bar</li>
                </ul>
                <!--placeholder div to prevent jumpy content when nav gets pinned-->
                <div style="padding:1em;" data-0="display:none;" data-top-top="display:block;" data-anchor-target="#nav" data-edge-strategy="set">&nbsp;</div>



                <p>
                    <strong>Scroll down to see the nav getting fixed.</strong>
                </p>

                <p>Biltong pastrami kielbasa short ribs, turducken shoulder pork chop boudin ground round speck cow. Fatback leberkas shank hamburger, tail pork belly tongue bresaola short ribs corned beef speck tri-tip ribeye. Filet mignon shoulder speck pastrami. Ham hock turducken corned beef shankle. Meatloaf shankle sausage boudin, shank flank turducken tenderloin pancetta ball tip. Biltong boudin jowl drumstick pig.</p>

                <p>Sirloin venison bresaola andouille pastrami short ribs. Short loin cow capicola tail ham hock leberkas. Frankfurter meatloaf capicola, swine ball tip jerky pork loin pork belly cow ribeye brisket strip steak jowl beef ribs ham hock. Pastrami ham hock rump turkey, pork belly capicola jerky. Turkey chuck beef, bresaola filet mignon jerky tri-tip pastrami. Bacon capicola jowl fatback short ribs. Speck shankle bacon chuck.</p>

                <p>Pork loin tail pork belly shank ham. Kielbasa venison ham, short loin ham hock beef ribs tri-tip ball tip pork belly. Ribeye sirloin sausage tenderloin hamburger. Strip steak tongue turkey, andouille bacon beef ribs venison. T-bone ball tip bresaola fatback, ground round meatball chicken sausage tongue pork chop leberkas sirloin jerky shank bacon. Turducken sirloin cow shankle pig, leberkas venison boudin pastrami.</p>

                <p>Cow fatback short loin, hamburger speck jowl turducken capicola ham hock. Hamburger corned beef strip steak shank filet mignon, jerky capicola chicken jowl ribeye pork ham hock ground round bresaola. Jowl ribeye kielbasa drumstick pork belly leberkas. Spare ribs fatback shankle, hamburger meatloaf sausage pork loin andouille pork kielbasa. Pancetta shank tongue, leberkas turducken shoulder rump meatball pork belly pig hamburger brisket biltong. Tenderloin short ribs pig, rump tail chuck turducken.</p>

                <p>Cow tri-tip pork loin salami corned beef. T-bone turkey ham frankfurter, brisket cow chicken bacon rump sirloin. Pancetta ribeye salami leberkas speck shank. Ribeye prosciutto swine venison speck beef.</p>

                <p>Biltong pastrami kielbasa short ribs, turducken shoulder pork chop boudin ground round speck cow. Fatback leberkas shank hamburger, tail pork belly tongue bresaola short ribs corned beef speck tri-tip ribeye. Filet mignon shoulder speck pastrami. Ham hock turducken corned beef shankle. Meatloaf shankle sausage boudin, shank flank turducken tenderloin pancetta ball tip. Biltong boudin jowl drumstick pig.</p>

                <p>Sirloin venison bresaola andouille pastrami short ribs. Short loin cow capicola tail ham hock leberkas. Frankfurter meatloaf capicola, swine ball tip jerky pork loin pork belly cow ribeye brisket strip steak jowl beef ribs ham hock. Pastrami ham hock rump turkey, pork belly capicola jerky. Turkey chuck beef, bresaola filet mignon jerky tri-tip pastrami. Bacon capicola jowl fatback short ribs. Speck shankle bacon chuck.</p>

                <p>Pork loin tail pork belly shank ham. Kielbasa venison ham, short loin ham hock beef ribs tri-tip ball tip pork belly. Ribeye sirloin sausage tenderloin hamburger. Strip steak tongue turkey, andouille bacon beef ribs venison. T-bone ball tip bresaola fatback, ground round meatball chicken sausage tongue pork chop leberkas sirloin jerky shank bacon. Turducken sirloin cow shankle pig, leberkas venison boudin pastrami.</p>

                <p>Cow fatback short loin, hamburger speck jowl turducken capicola ham hock. Hamburger corned beef strip steak shank filet mignon, jerky capicola chicken jowl ribeye pork ham hock ground round bresaola. Jowl ribeye kielbasa drumstick pork belly leberkas. Spare ribs fatback shankle, hamburger meatloaf sausage pork loin andouille pork kielbasa. Pancetta shank tongue, leberkas turducken shoulder rump meatball pork belly pig hamburger brisket biltong. Tenderloin short ribs pig, rump tail chuck turducken.</p>

                <p>Cow tri-tip pork loin salami corned beef. T-bone turkey ham frankfurter, brisket cow chicken bacon rump sirloin. Pancetta ribeye salami leberkas speck shank. Ribeye prosciutto swine venison speck beef.</p>

                <p>Biltong pastrami kielbasa short ribs, turducken shoulder pork chop boudin ground round speck cow. Fatback leberkas shank hamburger, tail pork belly tongue bresaola short ribs corned beef speck tri-tip ribeye. Filet mignon shoulder speck pastrami. Ham hock turducken corned beef shankle. Meatloaf shankle sausage boudin, shank flank turducken tenderloin pancetta ball tip. Biltong boudin jowl drumstick pig.</p>

                <p>Sirloin venison bresaola andouille pastrami short ribs. Short loin cow capicola tail ham hock leberkas. Frankfurter meatloaf capicola, swine ball tip jerky pork loin pork belly cow ribeye brisket strip steak jowl beef ribs ham hock. Pastrami ham hock rump turkey, pork belly capicola jerky. Turkey chuck beef, bresaola filet mignon jerky tri-tip pastrami. Bacon capicola jowl fatback short ribs. Speck shankle bacon chuck.</p>

                <p>Sirloin venison bresaola andouille pastrami short ribs. Short loin cow capicola tail ham hock leberkas. Frankfurter meatloaf capicola, swine ball tip jerky pork loin pork belly cow ribeye brisket strip steak jowl beef ribs ham hock. Pastrami ham hock rump turkey, pork belly capicola jerky. Turkey chuck beef, bresaola filet mignon jerky tri-tip pastrami. Bacon capicola jowl fatback short ribs. Speck shankle bacon chuck.</p>

                <p>Pork loin tail pork belly shank ham. Kielbasa venison ham, short loin ham hock beef ribs tri-tip ball tip pork belly. Ribeye sirloin sausage tenderloin hamburger. Strip steak tongue turkey, andouille bacon beef ribs venison. T-bone ball tip bresaola fatback, ground round meatball chicken sausage tongue pork chop leberkas sirloin jerky shank bacon. Turducken sirloin cow shankle pig, leberkas venison boudin pastrami.</p>

                <p>Cow fatback short loin, hamburger speck jowl turducken capicola ham hock. Hamburger corned beef strip steak shank filet mignon, jerky capicola chicken jowl ribeye pork ham hock ground round bresaola. Jowl ribeye kielbasa drumstick pork belly leberkas. Spare ribs fatback shankle, hamburger meatloaf sausage pork loin andouille pork kielbasa. Pancetta shank tongue, leberkas turducken shoulder rump meatball pork belly pig hamburger brisket biltong. Tenderloin short ribs pig, rump tail chuck turducken.</p>

                <p>Cow tri-tip pork loin salami corned beef. T-bone turkey ham frankfurter, brisket cow chicken bacon rump sirloin. Pancetta ribeye salami leberkas speck shank. Ribeye prosciutto swine venison speck beef.</p>

                <p>Biltong pastrami kielbasa short ribs, turducken shoulder pork chop boudin ground round speck cow. Fatback leberkas shank hamburger, tail pork belly tongue bresaola short ribs corned beef speck tri-tip ribeye. Filet mignon shoulder speck pastrami. Ham hock turducken corned beef shankle. Meatloaf shankle sausage boudin, shank flank turducken tenderloin pancetta ball tip. Biltong boudin jowl drumstick pig.</p>

                <p>Sirloin venison bresaola andouille pastrami short ribs. Short loin cow capicola tail ham hock leberkas. Frankfurter meatloaf capicola, swine ball tip jerky pork loin pork belly cow ribeye brisket strip steak jowl beef ribs ham hock. Pastrami ham hock rump turkey, pork belly capicola jerky. Turkey chuck beef, bresaola filet mignon jerky tri-tip pastrami. Bacon capicola jowl fatback short ribs. Speck shankle bacon chuck.</p>

                <p>Pork loin tail pork belly shank ham. Kielbasa venison ham, short loin ham hock beef ribs tri-tip ball tip pork belly. Ribeye sirloin sausage tenderloin hamburger. Strip steak tongue turkey, andouille bacon beef ribs venison. T-bone ball tip bresaola fatback, ground round meatball chicken sausage tongue pork chop leberkas sirloin jerky shank bacon. Turducken sirloin cow shankle pig, leberkas venison boudin pastrami.</p>

                <p>Cow fatback short loin, hamburger speck jowl turducken capicola ham hock. Hamburger corned beef strip steak shank filet mignon, jerky capicola chicken jowl ribeye pork ham hock ground round bresaola. Jowl ribeye kielbasa drumstick pork belly leberkas. Spare ribs fatback shankle, hamburger meatloaf sausage pork loin andouille pork kielbasa. Pancetta shank tongue, leberkas turducken shoulder rump meatball pork belly pig hamburger brisket biltong. Tenderloin short ribs pig, rump tail chuck turducken.</p>

                <p>Cow tri-tip pork loin salami corned beef. T-bone turkey ham frankfurter, brisket cow chicken bacon rump sirloin. Pancetta ribeye salami leberkas speck shank. Ribeye prosciutto swine venison speck beef.</p>

                <p>Biltong pastrami kielbasa short ribs, turducken shoulder pork chop boudin ground round speck cow. Fatback leberkas shank hamburger, tail pork belly tongue bresaola short ribs corned beef speck tri-tip ribeye. Filet mignon shoulder speck pastrami. Ham hock turducken corned beef shankle. Meatloaf shankle sausage boudin, shank flank turducken tenderloin pancetta ball tip. Biltong boudin jowl drumstick pig.</p>

                <p>Sirloin venison bresaola andouille pastrami short ribs. Short loin cow capicola tail ham hock leberkas. Frankfurter meatloaf capicola, swine ball tip jerky pork loin pork belly cow ribeye brisket strip steak jowl beef ribs ham hock. Pastrami ham hock rump turkey, pork belly capicola jerky. Turkey chuck beef, bresaola filet mignon jerky tri-tip pastrami. Bacon capicola jowl fatback short ribs. Speck shankle bacon chuck.</p>

                <p>Pork loin tail pork belly shank ham. Kielbasa venison ham, short loin ham hock beef ribs tri-tip ball tip pork belly. Ribeye sirloin sausage tenderloin hamburger. Strip steak tongue turkey, andouille bacon beef ribs venison. T-bone ball tip bresaola fatback, ground round meatball chicken sausage tongue pork chop leberkas sirloin jerky shank bacon. Turducken sirloin cow shankle pig, leberkas venison boudin pastrami.</p>

                <p>Cow fatback short loin, hamburger speck jowl turducken capicola ham hock. Hamburger corned beef strip steak shank filet mignon, jerky capicola chicken jowl ribeye pork ham hock ground round bresaola. Jowl ribeye kielbasa drumstick pork belly leberkas. Spare ribs fatback shankle, hamburger meatloaf sausage pork loin andouille pork kielbasa. Pancetta shank tongue, leberkas turducken shoulder rump meatball pork belly pig hamburger brisket biltong. Tenderloin short ribs pig, rump tail chuck turducken.</p>

                <p>Cow tri-tip pork loin salami corned beef. T-bone turkey ham frankfurter, brisket cow chicken bacon rump sirloin. Pancetta ribeye salami leberkas speck shank. Ribeye prosciutto swine venison speck beef.</p>

                <p>Biltong pastrami kielbasa short ribs, turducken shoulder pork chop boudin ground round speck cow. Fatback leberkas shank hamburger, tail pork belly tongue bresaola short ribs corned beef speck tri-tip ribeye. Filet mignon shoulder speck pastrami. Ham hock turducken corned beef shankle. Meatloaf shankle sausage boudin, shank flank turducken tenderloin pancetta ball tip. Biltong boudin jowl drumstick pig.</p>

                <p>Sirloin venison bresaola andouille pastrami short ribs. Short loin cow capicola tail ham hock leberkas. Frankfurter meatloaf capicola, swine ball tip jerky pork loin pork belly cow ribeye brisket strip steak jowl beef ribs ham hock. Pastrami ham hock rump turkey, pork belly capicola jerky. Turkey chuck beef, bresaola filet mignon jerky tri-tip pastrami. Bacon capicola jowl fatback short ribs. Speck shankle bacon chuck.</p>

                <p>Pork loin tail pork belly shank ham. Kielbasa venison ham, short loin ham hock beef ribs tri-tip ball tip pork belly. Ribeye sirloin sausage tenderloin hamburger. Strip steak tongue turkey, andouille bacon beef ribs venison. T-bone ball tip bresaola fatback, ground round meatball chicken sausage tongue pork chop leberkas sirloin jerky shank bacon. Turducken sirloin cow shankle pig, leberkas venison boudin pastrami.</p>

                <p>Cow tri-tip pork loin salami corned beef. T-bone turkey ham frankfurter, brisket cow chicken bacon rump sirloin. Pancetta ribeye salami leberkas speck shank. Ribeye prosciutto swine venison speck beef.</p>
            </div>
        </div>
    </div>

{{-- Scripts --}}
    <script src="{{ elixir('assets/js/blog.js') }}"></script>
    @yield('scripts')
</body>
</html>
<div id="sidebar">

    <div class="inner">

        <!-- Search Box -->
        <section id="search" class="alt">
            <form id="search-form" method="get" action="{{ route('articles') }}" class="form-inline">
                @csrf
                <input type="text" class="form-control mb-2 mr-sm-2" name="search" id="search"
                    placeholder="Cauta articole..." style="padding: 0 10px; width:80%" />

                <button type="submit" class="btn btn-outline-primary mb-2"><i class="fa fa-search"></i></button>
            </form>
        </section>


        <!-- Menu -->
        @include('front.partials.side-menu')


        <!-- Featured Posts -->
        @include('front.partials.side-promo')

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">
                Copyright &copy; {{ date('Y') }} Informatii Studenti

            </p>
        </footer>

    </div>
</div>

<script>
    $('#search').keypress((e) => {

        // Enter key corresponds to number 13
        if (e.which === 13) {
            $('#search-form').submit();

        }
    });

</script>

<div class="font-roboto tracking-wider">

    <!-- Banner -->
    <x-web.Home.items.banner
        label="About us"
        desc=" We Design and develop Outstanding Digital products and digital -
                first Brands"
        padding="sm:px-[180px]"
        padding_mob="px-[70px]"
    />

    <x-web.about.company/>
    <x-web.about.work-process/>
    <x-web.about.counter/>
    <x-web.about.goal/>
    <x-web.about.team/>
    <x-web.about.feedback/>
    <x-web.home.footer/>
    <x-web.home.copyright/>

    <style>
        .tab-button.active {
            background-color: #F3F4F6;
            border-color: #3F5AF3;
            color: #3F5AF3;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
    <script>
        new PureCounter();

        function showTab(tabId) {

            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach((content) => {
                content.classList.add('hidden');
            });

            const selectedTab = document.getElementById(tabId);
            if (selectedTab) {
                selectedTab.classList.remove('hidden');
            }


            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach((button) => {
                button.classList.remove('active');
            });

            const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
            if (clickedButton) {
                clickedButton.classList.add('active');
            }
        }

        showTab('tab1');
    </script>
</div>






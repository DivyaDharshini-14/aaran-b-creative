<!--  6 - Common -->
<li class="flex align-center flex-col cursor-pointer ">

    <div
        @click="selected !== 2 ? selected = 2 : selected = null"
        class="relative flex flex-row justify-between items-center  focus:outline-none hover:bg-violet-500
                                text-gray-700 hover:text-white  px-4 group h-16">
                        <span class="inline-flex justify-center items-center space-x-3">
                            <x-icons.icon-fill iconfill="tag-menu" class="w-4 h-auto block fill-gray-500 group-hover:fill-white"/>
                            <span
                                class="flex font-semibold text-sm tracking-wide truncate my-4 font-sans uppercase">
                                Referrals
                            </span>
                        </span>
        <span class="inline-flex justify-center items-center">
                        <svg fill="currentColor" viewBox="0 0 20 20"
                             :class="{'rotate-0': selected ==null, 'rotate-180': selected === 2}"
                             class="inline w-6 h-6 float-right transition-transform duration-500 transform md:-mt-1">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg></span>


    </div>

    <div x-show="selected === 2" class="flex flex-col">

        <ul class="grid-cols-1 grid bg-white space-y-0.5">
            <x-menu.items.team-menu />
        </ul>
    </div>
</li>

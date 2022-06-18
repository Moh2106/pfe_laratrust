<template>
  <div class="hauteur">
      <main class="largeur text-stone-800">
            <section class="shadow row">
                <div class="tabs">
                    <div class=" tab">
                        <div class="border-l-2 border-transparent relative">
                            <input class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox" id="chck1">
                            <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none tab-label" for="chck1">
                                <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                                    <!-- icon by feathericons.com -->
                                    <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="6 9 12 15 18 9">
                                        </polyline>
                                    </svg>
                                </div>

                                <span class="text-grey-darkest font-thin text-xl">
                                    شكاية <i class="fa-solid fa-gear"></i>
                                </span>
                                
                            </header>
                            <div class="tab-content text-right">
                                <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                    <ul>
                                        <li class="pr-4 hover:bg-orange-300 hover:scale-125">
                                            <router-link to="/dashboard/addcomplaint"> إضافة شكاية  <i class="fa-solid fa-plus"></i></router-link>
                                        </li>

                                        <li class="pr-4 hover:bg-orange-300 hover:scale-125">
                                            <router-link to="/dashboard/gestionComplaint">تدبير شكاية <i class="fa-solid fa-pen"></i></router-link>
                                        </li>      

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" tab">
                        <div class="border-l-2 border-transparent relative">
                            <input class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox" id="chck1">
                            <header class="flex justify-between items-center p-5 pl-8 pr-8 cursor-pointer select-none tab-label" for="chck1">
                                <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                                    <!-- icon by feathericons.com -->
                                    <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="6 9 12 15 18 9">
                                        </polyline>
                                    </svg>
                                </div>

                                <span class="text-grey-darkest font-thin text-xl">
                                    محضر <i class="fa-solid fa-gear"></i>
                                </span>
                                
                            </header>
                            <div class="tab-content text-right">
                                <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                    <ul>
                                        <li class="pr-4 hover:bg-orange-300 hover:scale-125">
                                            <router-link to="/dashboard/addPv">إضافة محضر <i class="fa-solid fa-plus"></i></router-link>
                                        </li>

                                        <li class="pr-4 hover:bg-orange-300 hover:scale-125">
                                            <router-link to="/dashboard/gestionPv">تدبير محضر <i class="fa-solid fa-pen"></i></router-link>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
      </main>

        
  </div>
</template>

<script>
export default {

    

}
</script>
    
<style scoped>
    .tab {
    overflow: hidden;
    }
    .tab-content {
    max-height: 0;
    transition: all 0.5s;
    }
    input:checked + .tab-label .test {
        background-color: #000;
    }
    input:checked + .tab-label .test svg {
        transform: rotate(180deg);
        stroke: #fff;
    }
    input:checked + .tab-label::after {
    transform: rotate(90deg);
    }
    input:checked ~ .tab-content {
    max-height: 100vh;
    }


    .hauteur{ 
        height: 79vh;
        background: #e4e9ee;
        transform: translateY(-1.3em);
    }
    .largeur{
        max-height: 79vh;
        overflow: hidden;
        background: #e4e9ee;
        color: #0f056b;
    }
</style>
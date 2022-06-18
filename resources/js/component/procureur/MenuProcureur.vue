<template>
  <div class="taille">
      <main class="largeur text-stone-800 ">
            <section class="shadow row">
                <div class="tabs">

                    <div class="mb-6 text-right hover:bg-orange-300 hover:scale-100 hover:pr-3">
                        <router-link to="/dashboard" class="p-5"><span class="text-grey-darkest font-thin text-xl">
                            الإستقبال <i class="fa-solid fa-house"></i>
                        </span></router-link>
                        
                    </div>

                    <div class="mb-6 text-right hover:bg-orange-300 hover:scale-100 hover:pr-3">
                        <router-link to="/dashboard/user" class="p-5 "><span class="text-grey-darkest font-thin text-xl">
                            تدبير المستخدمين <i class="fa-solid fa-list-check"></i>
                        </span></router-link>
                        
                    </div>

                    <div class="mb-6 text-right hover:bg-orange-300 hover:scale-100 hover:pr-3">
                        <router-link to="/dashboard/seecomplaint" class="p-5"><span class="text-grey-darkest font-thin text-xl">
                            الإطلاع على الشكايات الجديدة <i class="fa-solid fa-envelope"></i>
                        </span></router-link>
                        
                    </div>

                    <div class="mb-2 text-right hover:bg-orange-300 hover:scale-100 hover:pr-3">
                        <router-link to="/dashboard/seepv" class="p-5" ><span class="text-grey-darkest font-thin text-xl">
                            الإطلاع على المحاضر الجديدة <i class="fa-solid fa-envelope"></i>
                        </span></router-link>
                        
                    </div>

                    <div class="tab text">
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

                                <span class="font-thin text-xl ">
                                    إحصائيات <i class="fa-solid fa-signal"></i>
                                </span>
                                
                            </header>
                            <div class="tab-content">
                                <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                    <ul class="pl-4 text-right">

                                        <li class="px-3 espace pr-3 hover:bg-orange-300 hover:scale-125 hover:pr-3">
                                            <router-link to="/dashboard/complaintStatistique">الشكايات</router-link>
                                        </li>

                                        <li class="px-3 espace pr-3 hover:bg-orange-300 hover:scale-125 hover:pr-3">
                                            <router-link to="/dashboard/pvStatistique">المحاضر</router-link>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab text">
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

                                <span class="font-thin text-xl">
                                    جواب نائب وكيل الملك <i class="fa-solid fa-feather"></i>
                                </span>
                                
                            </header>
                            <div class="tab-content">
                                <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                    <ul class="pl-4 text-right">

                                        <li class="px-3 espace pr-3 hover:bg-orange-300 hover:scale-125 hover:pls-3">
                                            <router-link to="/dashboard/viceAnswerPlainte">الشكايات</router-link>
                                        </li>

                                        <li class="px-3 espace pr-3 hover:bg-orange-300 hover:scale-125 hover:pl-3">
                                            <router-link to="/dashboard/viceAnswerPv">المحاضر</router-link>
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
    export default{
        
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

    .espace{
        padding-left: 1em;
    }

    .largeur{
        max-height: 77vh;
        overflow: hidden;
        background: #e4e9ee;
        color: #0f056b;
    }

    .taille{ 
        height: 77vh;
        background: #e4e9ee;
        transform: translateY(-1.5em);
    }
</style>
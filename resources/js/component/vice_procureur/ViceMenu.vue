<template>
  <div class="hauteur">
      <main class="largeur ">
            <section class="shadow row">
                <div class="tabs">

                    <div class="text-right mb-2 pr-2">
                        <router-link to="/dashboard/user" ><span class="text-xl text-right font-thin">
                            تدبير المستخدمين <i class="fa-solid fa-list-check pr-2"></i>
                        </span></router-link>
                        
                    </div>

                    <div class="text-right mb-2 pr-2">
                        <router-link to="/dashboard/seecomplaint" ><span class="text-xl text-right font-thin">
                            الإطلاع على الشكايات الجديدة <i class="fa-solid fa-envelope pr-2"></i>
                        </span></router-link>
                        
                    </div>

                    <div class="text-right mb-2 pr-2">
                        <router-link to="/dashboard/seepv" ><span class="text-xl text-right font-thin">
                            الإطلاع على المحاضر الجديدة <i class="fa-solid fa-envelope pr-2"></i>
                        </span></router-link>
                        
                    </div>

                    <div class="tab">
                        <div class="border-l-2 border-transparent relative">
                            <input class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox" id="chck1">
                            <header class="flex justify-between items-center cursor-pointer select-none tab-label p-5 pl-8 pr-2" for="chck1">
                                <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                                    <!-- icon by feathericons.com -->
                                    <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="6 9 12 15 18 9">
                                        </polyline>
                                    </svg>
                                </div>

                                <span class="text-xl text-right font-thin mb-2">
                                    رؤية نواب الوكلاء المعينون <i class="fa-solid fa-square-plus pr-2"></i>
                                </span>
                                
                            </header>
                            <div class="tab-content">
                                <div class="pl-8 pr-2 pb-5 text-grey-darkest">
                                    <ul class="pl-4 text-right">

                                        <li class="px-3 espace">
                                            <router-link to="/dashboard/complaintDesignation">الشكايات</router-link>
                                        </li>

                                        <li class="px-3 espace">
                                            <router-link to="/dashboard/pvDesignation">المحاضر</router-link>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab">
                        <div class="border-l-2 border-transparent relative">
                            <input class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox" id="chck1">
                            <header class="flex justify-between items-center cursor-pointer select-none tab-label p-5 pl-8 pr-2" for="chck1">
                                <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                                    <!-- icon by feathericons.com -->
                                    <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="6 9 12 15 18 9">
                                        </polyline>
                                    </svg>
                                </div>

                                <span class="text-xl text-right font-thin mb-2">
                                    إجابة نواب الوكلاء <i class="fa-solid fa-square-plus pr-2"></i>
                                </span>
                                
                            </header>
                            <div class="tab-content">
                                <div class="pl-8 pr-2 pb-5 text-grey-darkest">
                                    <ul class="pl-4 text-right">

                                        <li class="px-3 espace">
                                            <router-link to="/dashboard/answerPlainte">الشكايات</router-link>
                                        </li>

                                        <li class="px-3 espace">
                                            <router-link to="/dashboard/answerPv">المحاضر</router-link>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" tab">
                        <div class="border-l-2 border-transparent relative">
                            <input class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox" id="chck1">
                            <header class="flex justify-between items-center cursor-pointer select-none tab-label p-5 pl-8 pr-2" for="chck1">
                                <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                                    <!-- icon by feathericons.com -->
                                    <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="6 9 12 15 18 9">
                                        </polyline>
                                    </svg>
                                </div>

                                <span class="text-xl text-right font-thin mb-2">
                                    إحصائيات <i class="fa-solid fa-signal pr-2"></i>
                                </span>
                                
                            </header>
                            <div class="tab-content">
                                <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                    <ul class="pl-4 text-right">
                                        <li class="px-3 espace">
                                            <router-link to="/dashboard/complaintStatistique">الشكايات</router-link>
                                        </li>

                                        <li class="px-3 espace">
                                            <router-link to="/dashboard/pvStatistique">المحاضر</router-link>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="border-b tab">
                        <div class="border-l-2 border-transparent relative">
                            <input class="w-full absolute z-10 cursor-pointer opacity-0 h-5 top-6" type="checkbox" id="chck2">
                            <header class="flex justify-between items-center cursor-pointer select-none tab-label p-5 pl-8 pr-2" for="chck2">
                                <div class="rounded-full border border-grey w-7 h-7 flex items-center justify-center test">
                                    <!-- icon by feathericons.com -->
                                    <svg aria-hidden="true" class="" data-reactid="266" fill="none" height="24" stroke="#606F7B" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                       <polyline points="6 9 12 15 18 9">
                                        </polyline>
                                    </svg>
                                </div>

                                <span class="text-xl text-right font-thin mb-2">
                                    إجابة للوكيل العام للملك <i class="fa-solid fa-voicemail pr-2"></i>
                                </span>
                                
                            </header>
                            <div class="tab-content">
                                <div class="pl-8 pr-8 pb-5 text-grey-darkest">
                                    <ul class="pl-4 text-right">
                                        <li class="p-2">
                                            <router-link to="/dashboard/reponseplainte">الشكايات</router-link>
                                        </li>
                                        <li class="p-2">
                                            <router-link to="/dashboard/reponsepv">المحاضر</router-link>
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
        max-height: 80vh;
        overflow: hidden;
        background: #e4e9ee;
        color: #0f056b;
    }

    .hauteur{ 
        height: 80vh;
        background: #e4e9ee;
        transform: translateY(-1.3em);
    }


</style>
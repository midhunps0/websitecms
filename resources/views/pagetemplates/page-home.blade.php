<x-guest-layout>
    <div class="bg-white items-center max-w-8xl  mx-auto text-base-content ">
        <div>
            <div class="relative flex flex-col items-center">
                <x-main-menu-component />
                <div class="absolute z-0 top-0 left-0 h-full w-full flex flex-row">
                    <div class="h-full w-full flex flex-col justify-between items-end">
                        <div class="bg-gray w-1/2 md:w-72 lg:w-77 h-28 md:h-28 lg:h-30"></div>
                        <div class="bg-gray w-1/2 md:w-72 lg:w-77 h-28 md:h-28 lg:h-30"></div>
                    </div>
                    <div class="h-full w-32 lg:w-36 bg-gray"></div>
                </div>

                <div class="md:flex w-full md:px-16 lg:px-24 z-10">
                    <div
                        class=" lg:w-1/2 hidden lg:flex lg:mt-24 lg:text-4xl xl:text-[2.75rem] font-thin font-franklin lg:flex-col justify-center">
                        <p class="text-darkgray leading-[3.25rem]">
                            {!! $instance->current_translation->data['title'] !!}
                        </p>
                        <div class="lg:flex lg:mt-12 lg:space-x-1">
                            <x-bluebutton-component text="Book An Appointment" href="#" />
                            <x-pinkbutton-component text="Chat With Us" href="#" />
                        </div>
                        <p class="mt-8 font-bold md:text-base xl:text-lg 2xl:text-xl flex font-gothic">
                            Feel Free To Call Us Any Time
                        </p>
                        <div class="flex  mt-2 flex-row items-center space-x-1">
                            <img src="/images/icons/Phone.png" class="h-3  2xl:h-5 "alt="">
                            <p class="text-black text-sm  md:text-base xl:text-lg 2xl:text-xl font-light">+91 8590462565
                            </p>
                        </div>
                        <p class="text-sm text-darkpink  md:text-base font-normal xl:text-lg  mt-2 md:mt-4">
                            Kochi | Kodungallur
                        </p>
                    </div>
                    <div class="lg:w-1/2">
                        <div class="flex justify-center lg:flex lg:justify-normal">
                            <img src="/images/home/baby.jpg"
                                class="w-2/3 sm:w-4/5 md:w-3/4 lg:w-10.5/12 shadow-[5px_5px_4px_2px_rgba(0,0,0,0.3)] relative z-10 "alt="baby_image">
                        </div>
                        <div class="flex justify-center">
                            <div
                                class="flex flex-col justify-center lg:hidden absolute  bg-lightgray/80 z-20  text-center font-franklin w-4/5 sm:w-11/12 md:w-11/12  text-2xl md:text-3xl py-6 md:py-12 md:-mt-16  -mt-12 shadow-[0px_10px_12px_-4px_rgba(0,0,0,0.3)]">
                                <p class="text-darkgray">The <span class="text-pink">Most Trusted</span> Hospital</p>
                                <p class="text-darkgray">For <span class="text-blue">Infertility Treatment</span></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="lg:hidden mt-24 sm:mt-28 sm:pt-0 relative ">
                    <div class="flex justify-center ltr:space-x-2 rtl:space-x-2 rtl:space-x-reverse md:mt-36">
                        <x-bluebutton-component />
                        <x-pinkbutton-component />
                    </div>
                    <div class="">
                        <p class="mt-8 font-bold md:text-base text-center  font-gothic">Feel Free To Call Us Any Time
                        </p>
                        <div class="flex justify-center  mt-2 flex-row items-center space-x-1">
                            <img src="/images/icons/Phone.png" class="h-3  2xl:h-5 "alt="">
                            <p class="text-black text-sm  md:text-base xl:text-lg 2xl:text-xl font-light">+91 8590462565
                            </p>
                        </div>
                        <p class="text-sm text-darkpink text-center md:text-base font-normal xl:text-lg  mt-2 md:mt-4">
                            Kochi
                            | Kodungallur</p>
                    </div>


                </div>
                <div class="mt-10 z-10">
                    <p
                        class="  lg:block text-sm italic text-pink  md:text-base xl:text-lg 2xl:text-xl font-normal text-center ">
                        <span class="font-bold">55,000 </span> little angles & counting...
                    </p>
                    <div
                        class="flex justify-center space-x-4  sm:space-x-6    md:space-x-8  lg:space-x-32  rtl:space-x-reverse z-20 relative mt-6 pb-12">
                        <x-babynew-component :count="'14,000'" :text="'IVF-ICFSI'" />
                        <x-babynew-component :count="'3,800'" :text="'MTESE-TESA ICSI'" />
                        <x-babynew-component :count="'500'" :text="'PGS/PGD'" />
                    </div>
                </div>

            </div>
        </div>

        <div class="my-20 flex flex-col w-full px-2 md:px-16 lg:px-24 z-10">
            <h2 class="text-darkgray text-3xl text-center font-franklin">What our Patients Are Saying</h2>

            <div class="ltr:flex flex-row w-full rtl:flex-reverse  mt-4">
                <img src="/images/icons/google icon.webp" class="h-6 lg:h-8 xl:h-10 rounded-full border border-gray"
                    alt="">
                <p
                    class="text-darkgray font-franklin ltr:text-left rtl:text-right  text-base lg:text-lg xl:text-xl xl:p-2">
                    Reviews</p>
            </div>

            <div class="mt-8 flex justify-center md:hidden">
                <x-review-component />
            </div>

            <div class="mt-8 justify-between hidden md:flex space-x-4 lg:space-x-4 xl:space-x-14 rtl:space-x-reverse">
                <div><x-review-component /></div>
                <div><x-review-component /></div>
                <div class="hidden lg:block"><x-review-component /></div>
            </div>

            <div
                class="mt-6 flex ltr:justify-end rtl:justify-end ltr:md:justify-center rtl:md:justify-center ltr:mr-10  rtl:ml-10 ltr:sm:mr-40 rtl:sm:ml-40 ltr:md:mr-0 rtl:md:ml-0 ">
                <x-viewallbutton-component text="More Reviews" />
            </div>
        </div>

        <div class="relative my-20 w-full z-10 px-2 md:px-0">
            <div class="absolute bg-gray w-full md:w-1/2 h-full top-0 ltr:left-0 rtl:right-0 z-0 "></div>
            <div class="flex flex-col md:flex-row relative w-full md:px-16 lg:px-24 z-10">
                <div class="w-full md:w-1/2 py-4 md:py-16 relative">
                    <div class="absolute z-0 top-0 py-10 left-0 h-full w-full">
                        <img src="/images/icons/qouteleftgray.png" class="h-full hidden md:block z-0 dir-img"alt="">
                    </div>
                    <p class="text-3xl text-darkgray font-franklin pt-6 relative z-40">Video
                        Testimonials</p>
                    <p class="z-40 relative w-2/3 text-2xl text-darkgray font-franklin mt-3 lg:mt-8 ">Our patients are
                        our best
                        advocates, hear the inspiring stories of their treatment journey</p>
                    <div class="hidden md:block mt-4 lg:mt-8 z-20 relative"><x-viewallbutton-component
                            text="All Testimonials" /></div>
                </div>
                <div class="w-full md:w-1/2 relative py-4 md:py-16">
                    <div class="absolute top-0 ltr:left-0 rtl:right-0 bg-gray w-1/2 h-full z-0">
                    </div>
                    <div class="relative z-10 w-full" style="position:relative;padding-bottom:56.25%;">
                        <iframe width="100%" height="100%"
                            class="w-full absolute top-0 left-0"src="https://www.youtube.com/embed/0Pgrr23voYs?si=QPgjNPM6CUIpC4nC"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="relative mt-4 flex flex-row justify-center space-x-4">
                        <a href="#"
                            class="border border-gray bg-darkgray text-white p-2 w-7-h-7 rounded-full flex items-center justify-center">
                            <x-easyadmin::display.icon icon="easyadmin::icons.chevron_left" height="h-6"
                                width="w-6" />
                        </a>
                        <a href="#"
                            class="border border-gray bg-darkgray text-white p-2 w-7-h-7 rounded-full flex items-center justify-center">
                            <x-easyadmin::display.icon icon="easyadmin::icons.chevron_right" height="h-6"
                                width="w-6" />
                        </a>
                    </div>
                    <div class="md:hidden mt-8 lg:mt-8 z-20 relative flex flex-row justify-center">
                        <x-viewallbutton-component text="All Testimonials" />
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8">
            <h2 class="text-darkgray text-3xl text-center font-franklin">Why Is Your IVF Cycle In Craft Most Likely To
                Be Successful </h2>
        </div>

        <div class="hidden relative my-20 lg:flex flex-row justify-center w-full md:px-16 lg:px-24 z-10 h-fit">
            <div class="relative w-1/2 border border-gray p-8">
                <div class="absolute h-full w-full top-0 left-0 z-0 flex justify-center">
                    <img src="/images/icons/vector women pink_Mesa de trabajo 1.png" class="h-full opacity-40 dir-img"
                        alt="pregnant_lady_image">
                </div>
                <div class="relative z-40">
                        <div class="flex justify-center items-center min-h-96">
                            <div>
                                <div class="flex justify-center items-center">
                                    <div class="text-pink">
                                        <x-easyadmin::display.icon icon="icons.sperm" height="h-16"
                                            width="w-16" />
                                    </div>
                                    <div class="items-center mt-1">
                                        <p class="font-bold text-2xl font-questrial ">100% non-donor policy</p>
                                    </div>
                                </div>
                                <div
                                    class="flex justify-center z-40 text-sm lg:text-base font-normal font-questrial text-justify w-3/4 m-auto px-[6%]">
                                    We’re
                                    the only centre in India that strictly follows a non-donor (self-parentage) IVF
                                    policy. We
                                    truly believe in 100% biological parentage. Hence with us, the end result is your
                                    own blood.
                                    To ensure that all babies born through IVF are biologically yours, we use an RI
                                    Witnessing
                                    system through Radio Frequency Identification (RFID) to detect and monitor all
                                    activity in
                                    the IVF Laboratory. The system helps mitigate the risk of human error there by
                                    ensuring that
                                    all embryos transferred are yours and yours alone.
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="absolute h-full w-full z-10 top-0 left-0 flex justify-center items-center">
                <div
                    class="w-full lg:w-10/12 xl:4/5 flex ltr:flex-row rtl:flex-row-reverse justify-between items-center">
                    <div class="flex flex-col ltr:justify-end rtl:justify-start space-y-8">
                        <div class="flex flex-row">
                            <x-cycle-component />
                            <div class="p-4"></div>
                            <x-cycle-component />
                        </div>
                        <div class="flex">
                            <x-cycle-component />
                            <div class="p-4"></div>
                            <x-cycle-component />
                        </div>
                    </div>
                    <div class="flex-col ltr:justify-start rtl:justify-end space-y-8">
                        <div class="flex">
                            <x-cycle-component />
                            <div class="p-4"></div>
                            <x-cycle-component />
                        </div>
                        <div class="flex">
                            <x-cycle-component />
                            <div class="p-4"></div>
                            <x-cycle-component />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

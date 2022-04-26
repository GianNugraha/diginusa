@extends("layouts.main", ['title' => 'Modals'])
@section("content")

{{-- Desktop --}}
<section class="content hidden md:flex flex-col space-y-4 px-5">

    <div class="bg-white flex flex-col space-y-3 p-5">
        <h3>Modal Notification</h3>
        <div class="flex space-x-3">
            {{-- modal Success --}}
            <div x-data="{ open: false }" class="relative">
                <button @click="open=true" id="btnFilterAscDesc" class="btn-success focus:outline-none">
                    Modal Success
                </button>
                <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                    x-transition:enter="transition duration-200 transform ease-out"
                    x-transition:enter-start="scale-75"
                    x-transition:leave="transition duration-100 transform ease-in"
                    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
                    <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                        <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                            <div></div>
                            <div>
                                <a href="#" @click="open=false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="p-7 flex flex-col items-center justify-center modal-body">
                            <span class="w-18 h-18 mb-2 rounded-full overflow-hidden mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 175.978 175.978">
                                    <g id="Group_3162" data-name="Group 3162" transform="translate(-926.25 -335.154)">
                                      <path id="Stroke_1" data-name="Stroke 1" d="M84.489,0A84.489,84.489,0,1,1,0,84.489,84.491,84.491,0,0,1,84.489,0Z" transform="translate(929.75 338.654)" fill="none" stroke="#1d907e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                                      <path id="Stroke_3" data-name="Stroke 3" d="M0,21.675,21.684,43.35,65.034,0" transform="translate(981.717 401.468)" fill="none" stroke="#1d907e" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                                    </g>
                                </svg>                                  
                            </span>

                            <h2 class="text-3xl text-success font-bold mb-4">SUKSES !</h2>
                            <p class="text-base font-medium text-center text-gray-800"> DAFTAR PERMINTAAN ANDA BERHASIL TERKIRIM.</p>
                            <button @click="open=false" type="button" class="btn-success w-full mt-5 focus:outline-none">
                                OKE
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- modal Primary --}}
            <div x-data="{ open: false }" class="relative">
                <button @click="open=true" id="btnFilterAscDesc" class="btn-primary focus:outline-none">
                    Modal Primary
                </button>
                <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                    x-transition:enter="transition duration-200 transform ease-out"
                    x-transition:enter-start="scale-75"
                    x-transition:leave="transition duration-100 transform ease-in"
                    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
                    <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                        <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                            <div></div>
                            <div>
                                <a href="#" @click="open=false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="p-7 flex flex-col items-center justify-center modal-body">
                            <span class="w-18 h-18 mb-2 rounded-full overflow-hidden mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 175.978 175.978">
                                    <g id="Group_3162" data-name="Group 3162" transform="translate(-926.25 -335.154)">
                                      <path id="Stroke_1" data-name="Stroke 1" d="M84.489,0A84.489,84.489,0,1,1,0,84.489,84.491,84.491,0,0,1,84.489,0Z" transform="translate(929.75 338.654)" fill="none" stroke="#5863ff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                                      <path id="Stroke_3" data-name="Stroke 3" d="M0,21.675,21.684,43.35,65.034,0" transform="translate(981.717 401.468)" fill="none" stroke="#5863ff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                                    </g>
                                  </svg>
                            </span>

                            <h2 class="text-3xl text-primary font-bold mb-4">SUKSES !</h2>
                            <p class="text-base font-medium text-center text-gray-800"> DAFTAR PERMINTAAN ANDA BERHASIL TERKIRIM.</p>
                            <button @click="open=false" type="button" class="btn-primary w-full mt-5 focus:outline-none">
                                OKE
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- modal Failed --}}
            <div x-data="{ open: false }" class="relative">
                <button @click="open=true" id="btnFilterAscDesc" class="btn-danger focus:outline-none">
                    Modal Danger
                </button>
                <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                    x-transition:enter="transition duration-200 transform ease-out"
                    x-transition:enter-start="scale-75"
                    x-transition:leave="transition duration-100 transform ease-in"
                    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
                    <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                        <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                            <div></div>
                            <div>
                                <a href="#" @click="open=false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-danger" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="p-7 flex flex-col items-center justify-center modal-body">
                            <span class="w-18 h-18 mb-2 rounded-full overflow-hidden mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 175.978 175.978">
                                    <g id="Group_3453" data-name="Group 3453" transform="translate(-4225.011 13276.809)">
                                      <g id="Group_3451" data-name="Group 3451" transform="translate(3298.761 -13611.963)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M84.489,0A84.489,84.489,0,1,1,0,84.489,84.491,84.491,0,0,1,84.489,0Z" transform="translate(929.75 338.654)" fill="none" stroke="#e8264f" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                                      </g>
                                      <g id="Group_3452" data-name="Group 3452" transform="translate(11.5 -6.319)">
                                        <line id="Line_32" data-name="Line 32" x2="61" y2="61" transform="translate(4274.5 -13210.5)" fill="none" stroke="#e8264f" stroke-linecap="round" stroke-width="9"/>
                                        <line id="Line_33" data-name="Line 33" x1="68" y2="66" transform="translate(4267.5 -13215.5)" fill="none" stroke="#e8264f" stroke-linecap="round" stroke-width="9"/>
                                      </g>
                                    </g>
                                  </svg>                                  
                            </span>

                            <h2 class="text-3xl text-danger font-bold mb-4">GAGAL !</h2>
                            <p class="text-base font-medium text-center text-gray-800"> DAFTAR PERMINTAAN ANDA GAGAL TERKIRIM.</p>
                            <button @click="open=false" type="button" class="btn-danger w-full mt-5 focus:outline-none">
                                OKE
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- modal Warning --}}
            <div x-data="{ open: false }" class="relative">
                <button @click="open=true" id="btnFilterAscDesc" class="btn-warning focus:outline-none">
                    Modal Warning
                </button>
                <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                    x-transition:enter="transition duration-200 transform ease-out"
                    x-transition:enter-start="scale-75"
                    x-transition:leave="transition duration-100 transform ease-in"
                    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
                    <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                        <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                            <div></div>
                            <div>
                                <a href="#" @click="open=false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="p-7 flex flex-col items-center justify-center modal-body">
                            <span class="w-18 h-18 mb-2 rounded-full overflow-hidden mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 175.978 175.978">
                                    <g id="Group_3454" data-name="Group 3454" transform="translate(3.5 3.5)">
                                      <g id="Group_3451" data-name="Group 3451" transform="translate(-929.75 -338.654)">
                                        <path id="Stroke_1" data-name="Stroke 1" d="M84.489,0A84.489,84.489,0,1,1,0,84.489,84.491,84.491,0,0,1,84.489,0Z" transform="translate(929.75 338.654)" fill="none" stroke="#fdb815" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                                      </g>
                                      <line id="Line_34" data-name="Line 34" y2="72" transform="translate(84.488 31.479)" fill="none" stroke="#fdb815" stroke-linecap="round" stroke-width="10"/>
                                      <circle id="Ellipse_56" data-name="Ellipse 56" cx="5.5" cy="5.5" r="5.5" transform="translate(79.488 117.979)" fill="#fdb815"/>
                                    </g>
                                  </svg>        
                            </span>

                            <h2 class="text-3xl text-warning font-bold mb-4">PERINGATAN !</h2>
                            <p class="text-base font-medium text-center text-gray-800"> PERHATIAN, DAFTAR PERMINTAAN ANDA GAGAL TERKIRIM.</p>
                            <button @click="open=false" type="button" class="btn-warning w-full mt-5 focus:outline-none">
                                OKE
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>
            {{-- modal Warning --}}
            <div x-data="{ open: false }" class="relative">
                <button @click="open=true" id="btnFilterAscDesc" class="btn-warning focus:outline-none">
                    Modal Warning for forms
                </button>
                <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                    x-transition:enter="transition duration-200 transform ease-out"
                    x-transition:enter-start="scale-75"
                    x-transition:leave="transition duration-100 transform ease-in"
                    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
                    <div class="modal relative bg-white overflow-hidden rounded-xl w-96 h-auto z-50">
                        <div class="modal-header flex bg-light text-primary font-semibold items-center justify-between py-4 px-4">
                            <div></div>
                            <div>
                                <a href="#" @click="open=false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="p-7 flex flex-col items-center justify-center modal-body">
                            <span class="w-18 h-18 mb-2 rounded-full overflow-hidden mb-5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24" viewBox="0 0 175.978 175.978">
                                    <g id="Group_3462" data-name="Group 3462" transform="translate(-1421.033 -1472.691)">
                                      <g id="Component_614_2" data-name="Component 614 – 2" transform="translate(1424.533 1476.191)">
                                        <g id="Group_3454" data-name="Group 3454">
                                          <g id="Group_3451" data-name="Group 3451" transform="translate(-929.75 -338.654)">
                                            <path id="Stroke_1" data-name="Stroke 1" d="M84.489,0A84.489,84.489,0,1,1,0,84.489,84.491,84.491,0,0,1,84.489,0Z" transform="translate(929.75 338.654)" fill="none" stroke="#fdb815" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="7"/>
                                          </g>
                                        </g>
                                      </g>
                                      <path id="Icon_awesome-question" data-name="Icon awesome-question" d="M29.214,0C16.811,0,8.778,5.082,2.471,14.145a3.733,3.733,0,0,0,.8,5.108l6.7,5.083a3.729,3.729,0,0,0,5.167-.645c3.892-4.876,6.78-7.684,12.86-7.684,4.78,0,10.693,3.077,10.693,7.712,0,3.5-2.893,5.3-7.613,7.95C25.581,34.756,18.3,38.6,18.3,48.2v1.521a3.729,3.729,0,0,0,3.729,3.729H33.288a3.729,3.729,0,0,0,3.729-3.729v-.9c0-6.66,19.465-6.937,19.465-24.96C56.483,10.3,42.4,0,29.214,0ZM27.657,58.032A10.764,10.764,0,1,0,38.421,68.8,10.776,10.776,0,0,0,27.657,58.032Z" transform="translate(1479.879 1520.121)" fill="#fdb815"/>
                                    </g>
                                  </svg>
                                  
                            </span>

                            <h2 class="text-3xl text-warning font-bold mb-4">PERINGATAN!</h2>
                            <p class="text-base font-medium text-center text-gray-800"> Yakin ingin menyimpan data ?</p>
                            <div class="w-full flex items-center justify-center space-x-2">
                                <button @click="open=false" type="button" class="btn-disabled mt-5 focus:outline-none">
                                    Batal
                                </button>
                                <button type="submit" class="btn-success mt-5 focus:outline-none">
                                    Ya, Simpan
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-white flex flex-col space-y-3 p-5">
        <h3>Modal Form</h3>
        <div class="flex space-x-3">
            {{-- modal Form --}}
            <div x-data="{ open: false }" class="relative">
                <button @click="open=true" id="btnFilterAscDesc" class="btn-disabled focus:outline-none">
                    Modal Form
                </button>
                <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                    x-transition:enter="transition duration-200 transform ease-out"
                    x-transition:enter-start="scale-75"
                    x-transition:leave="transition duration-100 transform ease-in"
                    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
                    <div class="modal relative bg-white overflow-hidden rounded-xl max-w-6xl h-auto z-50">
                        <div class="modal relative bg-white overflow-hidden rounded-xl max-w-6xl h-auto z-50">
                            <div class="modal-header flex bg-light text-primary absolute top-0 inset-x-0 font-semibold items-center justify-between py-4 px-4">
                                <div><span class="text-dark text-lg font-semibold">Modal Title</span></div>
                                <div>
                                    <a href="#" @click="open=false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="px-5 pt-20 pb-32 overflow-x-hidden overflow-y-auto items-center justify-center modal-body" style="min-height: 10vh !important; max-height: 80vh !important;">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae rem, amet sed corrupti repudiandae provident rerum molestiae eos voluptatibus ea cum dolores ad eligendi perspiciatis mollitia aliquid eaque consectetur officiis. Sequi eligendi quasi, ullam blanditiis adipisci magnam! Officia laudantium delectus perferendis non laboriosam sint, praesentium tempore esse suscipit alias placeat modi? Omnis laudantium reprehenderit modi vero autem voluptatem fugit accusamus possimus voluptate nostrum amet aspernatur pariatur, commodi facere dolore molestiae. Expedita animi officiis in placeat, aspernatur ducimus perferendis quod! Alias, optio recusandae temporibus expedita molestiae maxime aspernatur similique pariatur? Nesciunt voluptate, libero nobis dicta molestiae doloribus cum alias repellat veniam numquam harum nam, dolorum odio, eum enim iusto id ab unde error at exercitationem cupiditate. Molestiae tempore quod sequi atque in facere dolore temporibus quas, eos vel blanditiis provident consequatur quia cumque necessitatibus nesciunt quae. Suscipit ex at sint nesciunt deleniti voluptatem qui veniam repellat vitae beatae earum eius ratione eum id porro temporibus reiciendis quisquam et, nobis cupiditate delectus! Incidunt non veritatis libero quis corporis cumque accusantium est quos quidem dolore quas facere molestiae doloremque rerum ea aliquam, atque modi magnam dolores nisi, nobis similique. Rerum cumque ut nobis sapiente sint cupiditate aliquam expedita repellat. Minus fugiat voluptatum rem voluptatem? Quis asperiores ipsum repellat optio et veritatis nesciunt, cupiditate non rem amet iste incidunt minus fuga! Nulla, saepe facere itaque, amet eum unde corrupti minima harum id reiciendis quam! Eos totam vel at! Unde tempore inventore repudiandae fugiat, magnam omnis porro est rerum necessitatibus deleniti eaque. Doloremque maiores animi vero debitis molestias tempore odit, asperiores labore tenetur natus sit. Laborum necessitatibus facere, rem vero, quae eveniet totam quos culpa in distinctio, corrupti quis incidunt consectetur. Qui architecto blanditiis incidunt reprehenderit ad dignissimos inventore sed non? Temporibus laboriosam maxime sint, quidem eveniet quae consectetur natus voluptatem illo voluptatibus assumenda. Quisquam enim ratione, impedit alias optio quia expedita doloribus laboriosam autem quae aliquam, delectus maiores officiis excepturi vitae iste molestiae blanditiis? Cum sed commodi vero repudiandae, voluptatum qui? Laboriosam maiores est quaerat impedit dolores corrupti recusandae tenetur fugit voluptas rerum? Sunt ex fugit unde harum eius, dolorum odio esse modi vitae autem debitis quidem nemo ab, incidunt enim facere suscipit! Similique animi minus nostrum aliquam natus officia sint earum enim perferendis voluptatem illo vel minima necessitatibus voluptas sapiente fugiat excepturi modi quibusdam, aspernatur iure, eaque neque quam facere. Commodi magni eius minima, repudiandae adipisci blanditiis totam id voluptate corporis, fugit cum voluptatum, autem ex sed vitae eos libero inventore sunt optio voluptas! Consequatur nisi provident nihil voluptas officia vero quisquam repellat quia nostrum velit repellendus nulla voluptate iste, quas dolor harum aut magni, dolore omnis reprehenderit, perferendis totam saepe. Exercitationem, laboriosam nisi perferendis accusamus, aspernatur fuga ullam rem omnis rerum nam doloremque, quam libero quaerat et repellendus sint. Libero necessitatibus quibusdam ipsa temporibus debitis provident facere ducimus esse corporis maxime ea non, mollitia laboriosam tempora dolorum voluptas sapiente, eum pariatur soluta fugit sequi? Mollitia aliquid molestiae sint nemo voluptatibus temporibus inventore magni porro animi soluta nam quia maiores, nisi sapiente doloremque accusantium qui dolorum eaque possimus voluptatum ad laborum exercitationem quasi? Voluptatibus rerum accusamus culpa eaque blanditiis a dicta, consectetur aperiam quos sint odio amet quo. Distinctio esse, possimus suscipit dolores fuga nihil ullam dolorem dolore ut quod eos nostrum deserunt, hic, repellat similique. Mollitia rerum tempora aliquam doloremque culpa ullam molestiae natus quibusdam, vitae dolore commodi libero debitis cumque numquam beatae illo eveniet aspernatur quod minus fuga voluptatibus totam consectetur ducimus quia! Molestiae eaque numquam velit vel perspiciatis voluptate quisquam laudantium incidunt libero vero voluptatem, recusandae quia quas, explicabo qui fuga consectetur saepe? Reiciendis quo porro non blanditiis. Cupiditate, inventore pariatur tenetur officia beatae deserunt veniam dolor commodi. Explicabo perferendis repellat molestiae voluptatum ducimus veniam harum soluta deserunt aspernatur eveniet enim velit, alias, rem sint quae. Sapiente modi dolores beatae amet soluta ea perspiciatis, debitis dicta architecto fugiat ullam iure minima accusantium ipsa sunt cupiditate rem illum iste labore ratione odio! Nesciunt deserunt veniam ut ipsam omnis necessitatibus magni modi ullam minus corporis? Saepe sunt aut atque quia natus perspiciatis nulla libero sint rerum incidunt praesentium eos numquam ab recusandae amet doloremque, officia voluptatem assumenda inventore. Illum eveniet commodi aut repellendus atque quae quo aperiam nostrum necessitatibus, suscipit quas, doloribus non neque. Est, voluptas blanditiis hic impedit adipisci vitae minus eaque quidem unde! Dignissimos minima velit ipsam? Perferendis voluptate, deserunt non asperiores eos consequatur sint corporis, ut nisi expedita et? Quidem, tenetur, magnam id voluptatibus asperiores quasi ipsa dicta quia totam ut explicabo hic aspernatur quas commodi ea impedit repudiandae iure qui facere a officia, temporibus dolore. Architecto nulla magni quibusdam in hic aperiam cumque nobis optio perspiciatis quam, consectetur molestiae iste, ullam harum. Reprehenderit alias eveniet rerum omnis laboriosam commodi laudantium quibusdam porro ea aut non vero quo sed distinctio quod eos fuga tempore blanditiis harum deserunt soluta, incidunt quis, minima quidem? Illum ratione in quas reiciendis sint, doloremque aliquam tempore excepturi nulla earum dignissimos aliquid ipsum sed unde, eveniet impedit assumenda porro numquam natus aperiam! Aliquid dolorum commodi libero facilis a suscipit ipsum beatae nam perspiciatis cum aliquam molestiae, eligendi hic, in maxime, iure exercitationem nesciunt tempora voluptatem dolor recusandae saepe ipsam quam perferendis. Consequatur magnam tempora explicabo corporis eos distinctio illum iusto, eaque quae quo itaque voluptate maxime impedit, doloremque cumque maiores aut debitis aperiam non quasi sapiente. Dicta, voluptatum ex culpa, explicabo tenetur id sed numquam at officiis accusamus esse. Totam dolores fuga consequuntur, omnis impedit sequi eum nostrum magnam. Nihil odit sed accusamus praesentium, quidem neque necessitatibus reprehenderit tempora ipsam rem omnis voluptates voluptate iste tenetur. Non blanditiis veritatis accusantium nam, dolor, excepturi minus ex sint enim omnis alias explicabo tempore, eum fugiat soluta provident perspiciatis dolores facere exercitationem nisi dicta praesentium laboriosam consequuntur ut. Cum quisquam ex eveniet eaque assumenda incidunt nobis natus dicta numquam. Delectus enim iusto ipsa facere veniam! Nobis dicta voluptatibus ipsa ut placeat maiores dolorem sunt, iure nostrum nesciunt ducimus ipsam quibusdam sed in. Quibusdam nemo provident veniam, consequuntur recusandae, non beatae magni aliquam numquam placeat nobis itaque nihil perspiciatis.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            {{-- modal Form with footer--}}
            <div x-data="{ open: false }" class="relative">
                <button @click="open=true" id="btnFilterAscDesc" class="btn-disabled focus:outline-none">
                    Modal Form With Footer
                </button>
                <div x-show="open" @click.away="open = false"  x-init="setTimeout(() => show = false, 8000)" id="1"
                    x-transition:enter="transition duration-200 transform ease-out"
                    x-transition:enter-start="scale-75"
                    x-transition:leave="transition duration-100 transform ease-in"
                    x-transition:leave-end="opacity-0 scale-90" class=" overlay-modal fixed flex items-center justify-center z-50 w-screen h-screen flex inset-0" style="background-color: rgba(0,0,0,0.2);">
                    <div class="modal relative bg-white overflow-hidden rounded-xl max-w-6xl h-auto z-50">
                        <div class="modal-header flex bg-light text-primary absolute top-0 inset-x-0 font-semibold items-center justify-between py-4 px-4">
                            <div><span class="text-dark text-lg font-semibold">Modal Title</span></div>
                            <div>
                                <a href="#" @click="open=false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="px-5 pt-20 pb-32 overflow-x-hidden overflow-y-auto items-center justify-center modal-body" style="min-height: 10vh !important; max-height: 80vh !important;">
                            <form action="" class="flex flex-wrap space-y-5">
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>
                                <div class="flex items-center w-full space-x-5">
                                    <div class="form-group">
                                        <label class="label-form-dark">Label</label>
                                        <input type="text" class="form-control-secondary" placeholder="Text">
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer flex items-center justify-end absolute inset-x-0 bottom-0 p-4 bg-light">
                            <a href="" class="btn-primary">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@endsection

@push('bofore_style')
@endpush
@push('after_style')
@endpush
@push('bofore_scripts')
@endpush
@push('after_scripts')
@endpush
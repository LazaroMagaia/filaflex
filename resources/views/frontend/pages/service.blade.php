
@include("frontend.template.header")

<section>

    <div class="relative bg-service bg-cover bg-center h-[450px] w-full flex items-center justify-center overlay">
        <!-- Content -->
        <div class="relative z-10 text-white container max-w-4xl mx-auto text-center">
            <h1 class="text-2xl md:text-4xl font-bold">
                Nossos Serviços
            </h1>
        </div>
    </div>

    <div>
        <div class="flex flex-col items-center justify-center w-full py-10">
            <h1 class="text-3xl font-bold">Nossos Serviços</h1>
            <div class="h-1 bg-[#167FFC] rounded-md my-4 w-16 "></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4 px-2 md:px-10 py-10 
                    text-[#167FFC]">
                <div class="flex flex-col  border-2 border-[#167FFC] 
                        p-4 h-[350px]">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/Group.png')}}" class="w-[60px]" alt="Qualidade">
                    </div>
                    <div class="px-2">
                        <h2 class="text-xl font-bold py-2">Marcação de filas de espera</h2>
                        <ul class="py-4">
                            <li class="flex items-start gap-5 py-1"><img src="{{asset('images/bank.svg')}}" alt=""> 
                            Filas nos Bancos</li>
                            <li class="flex items-start gap-5 py-1"><img src="{{asset('images/hospital.svg')}}" alt=""> 
                            Filas nos Hospitais</li>
                            <li class="flex items-start gap-5 py-1"><img src="{{asset('images/cartorios.svg')}}" alt=""> 
                            Filas nos Cartórios</li>
                            <li class="flex items-start gap-5 py-1"><img src="{{asset('images/cartorios.svg')}}" alt=""> 
                            E diversos...</li>
                        </ul>
                    </div>
                </div>
                <!-- col -->
            
                <div class="flex flex-col items-center justify-center  h-[250px] hidden md:block mt-[80px]">
                    <img src="{{ asset('images/arrow_left.png') }}" class="w-full object-cover" alt="Qualidade" >
                    <img src="{{ asset('images/arrow_right.png') }}" class="w-full object-cover" alt="Qualidade" >
                </div>
                <!-- col -->

                    <div class="flex flex-col  border-2 border-[#167FFC] 
                        p-4 h-[350px] md:mt-[60px]">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/delivery.png')}}" class="w-[60px]" alt="Qualidade">
                    </div>
                    <div class="px-2">
                        <h2 class="text-xl font-bold py-2">Serviço de estafetagem</h2>
                        <ul class="py-4">
                            <li class="flex items-start gap-5 py-1"><img src="{{asset('images/Documents.svg')}}" alt=""> 
                            Recolha e entrega de documentos</li>
                            <li class="flex items-start gap-5 py-1"><img src="{{asset('images/Invoices.svg')}}" alt=""> 
                            Pagamento de facturas</li>
                            <li class="flex items-start gap-5 py-1"><img src="{{asset('images/Order.svg')}}" alt=""> 
                            Entrega de pequenas encomendas</li>
                        </ul>
                    </div>
                </div>
                <!-- col -->

            </div>
    </div>
    </div>
</section>

@include("frontend.template.footer")
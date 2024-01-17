<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Incentive Application') }}
        </h2>
    </x-slot>

    <div class="pt-5 pb-5 pl-10 pr-10"> 
        <div class="flex justify-center space-x-4">
            <div>
            <div class="flex-grow h-50 mx-auto bg-white p-8 rounded shadow-md flex-col">
                <!-- Incentive Application Form -->
                    @csrf
                        <!-- Special incentive -->
                        <div class="flex ...">
                            <div class="mb-6 w-3/5 pr-3" >
                                <p class="text-xl text-sky-800" >SPECIAL INCENTIVE ELIGIBILITY REQUIREMENTS FOR WEDDING COUPLE REGISTERED IN PAHANG STATE</p>
                                <br>
                                <p>This incentive is provided for couples whose grooms have an income of RM5000.00 and below subject to the specified conditions and guidelines.</p>
                                <br>
                                <li>Only Pahang children are eligible to receive this incentive.</li>
                                <li>Either the groom or the bride must be born in the State of Pahang.</li>
                                <li>Married couples where only the groom earns RM5000.00 and below are eligible to receive incentives</li>
                                <li>For marriages outside the state of Pahang, the groom must be a native of Pahang. (Foreign Permission (KBLN))</li>
                                <li>This marriage must be registered in the State of Pahang with the permission of the District Islamic Religious Office.</li>
                                <li>Marriages of Pahang children registered outside the state of Pahang, the bride and groom need to make an application and confirmation at the Islamic Religious Office (where the application is located).</li>
                                <li>For residents in the state of Pahang for at least 10 years or more, it is necessary to obtain confirmation from the Penghulu/Regional Assemblyman/FELDA manager/Qaryah Priest or Coordinator.</li>
                                <li>A widow or widower or one of the persons whose spouse is a native of Pahang and qualified, married for the first time with another spouse, is eligible to receive the incentive.</li>
                                <li>Each application must be sent to the District Islamic Religious Office where the Application for Permission or Marriage Registration is made.</li>
                            </div>

                            <div class="mb-6 w-2/5" >
                                <div class="container mx-auto bg-blue-100 h-40 pl-5 rounded-lg pt-2 pb-5">
                                    <p class="text-lg text-sky-800" >INCENTIVE APPLICATION: </p>
                                    <br>
                                    <div class="flex items-center justify-center pb=5 pt-5">
                                        <form action="{{ route('incentiveApplication.create') }}" method="get">
                                            @csrf
                                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600" name="createDirect">APPLY INCENTIVE</button>
                                        </form>

                                        <!-- Add the new button for 'View Applied' -->
                                        <form action="{{ route('incentiveApplication.views') }}" method="get">
                                            @csrf
                                            <button type="submit" class="bg-sky-700 text-white px-4 py-2 rounded-md hover:bg-sky-500 ml-4" name="viewsDirect">VIEW APPLIED</button>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>

                    <br>
                    <!-- Eligible or not -->

                    <div class="mb-6" >
                        <p class="text-xl text-sky-800" >YOU ARE <b>NOT ELIGIBLE</b> IF:</p>
                        <br>
                        <li>Polygamy</li>
                        <li>Remarriage (same spouse after the end of the iddah period)</li>
                        <li>Marriage without permission</li>
                        <li>Both couples are not from Pahang</li>
                        <li>Men's income exceeds RM 5,000.00</li>
                    </div>

                    <br>
                    
                    <div class="mb-6" >
                        <p class="text-xl text-sky-800" >DOCUMENTS REQUIRED</p>
                        <br>
                        <li>Bank Statement</li>
                        <li>Pay Slip</li>
                    </div>
                    
                </div>                                                                          
        </div>
        </div>
    </div>
</x-app-layout>

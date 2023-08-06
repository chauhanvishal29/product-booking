<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <ul class="nav nav-tabs m-5" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="bookingReport-tab" data-bs-toggle="tab" data-bs-target="#bookingReport"
                            type="button" role="tab" aria-controls="bookingReport" aria-selected="true">Booking Report</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="monthwiseproductreport-tab" data-bs-toggle="tab" data-bs-target="#monthwiseproductreport"
                            type="button" role="tab" aria-controls="monthwiseproductreport" aria-selected="false">Month wise product report</button>
                    </li>
                </ul>
                <div class="tab-content m-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="bookingReport" role="tabpanel" aria-labelledby="bookingReport-tab"><a href="{{ route('export-product') }}" class="p-3 mb-2 bg-primary text-white">Export Booking Report</a></div>
                    <div class="tab-pane fade" id="monthwiseproductreport" role="tabpanel" aria-labelledby="monthwiseproductreport-tab"><a href="{{ route('export-product-month-wise') }}" class="p-3 mb-2 bg-primary text-white">Export Month Wise Product Report</a></div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

 @extends('mainlayout.layout')

 @section('content')
     <div class="pt-10 min-h-screen w-full bg-main  ">
         @include('session.danger')
         <div class=" w-[45%] bg-[#FFFFFF] rounded-2xl mx-auto   px-5 py-6 flex flex-col">
             <div class="w-[90%] mx-auto ">

                 <div class="my-3">
                     <h1 class="font-inter font-[600] text-[24px] text-grey">Create new product</h1>
                 </div>
                 <div class="my-3">
                     <p class="font-inter font-[600] text-[16px] text-grey">General information</p>
                     <p class="font-inter font-[600] text-[14px] text-grey-light">
                         To start selling, all you need is a title and a price.
                     </p>
                 </div>
                 <div class="my-3">
                     <p class="font-inter font-[600] text-[16px] text-grey">Detail</p>
                     <p class="font-inter font-[600] text-[14px] text-grey-light">
                         Give your product a short and clear title.
                         50-60 characters is the recommended length for search engines.
                     </p>
                 </div>
                 <form method="POST" action="/form-submit" enctype="multipart/form-data">
                     @csrf
                     <div
                         class="w-[700px] h-[72px] bg-grey-lighter rounded-lg px-4 py-1 flex flex-col justify-center items-start my-3">
                         <label class="font-inter font-[600] text-[12px] text-grey-light">Title<span
                                 class="text-[#FF0000]">*</span>
                         </label>
                         <input type="text" name="title" placeholder="isikan judul brohhhh" required
                             class="font-inter font-[400] text-grey-light text-[14px] w-full bg-grey-lighter outline-none" />
                     </div>
                     <div
                         class="w-[700px] h-[72px] bg-grey-lighter rounded-lg px-4 py-1 flex flex-col justify-center items-start  my-3">
                         <label class="font-inter font-[600] text-[12px] text-grey-light">Product Price<span
                                 class="text-[#FF0000]">*</span>
                         </label>
                         <input type="number" name="product-price" placeholder="fill product price" required
                             class="font-inter font-[400] text-grey-light text-[14px] w-full bg-grey-lighter outline-none" />
                     </div>

                     <div
                         class="w-[700px] h-[72px] bg-grey-lighter rounded-lg px-4 py-1 flex flex-col justify-center items-start my-3">
                         <label class="font-inter font-[600] text-[12px] text-grey-light">Product Quantity<span
                                 class="text-[#FF0000]">*</span>
                         </label>
                         <input type="number" name="product-quantity" placeholder="fill product price" required
                             class="font-inter font-[400] text-grey-light text-[14px] w-full bg-grey-lighter outline-none" />
                     </div>

                     <div
                         class="w-[700px] h-[250px] bg-grey-lighter rounded-lg px-4 py-1 flex flex-col justify-start items-start my-3">
                         <label class="font-inter font-[600] text-[12px] text-grey-light">fill description<span
                                 class="text-[#FF0000]">*</span>
                         </label>
                         <textarea name="description" id="" cols="30" rows="10" required
                             class="w-full h-full font-inter font-[400] text-grey-light text-[14px]   bg-grey-lighter outline-none"></textarea>
                     </div>

                     <div
                         class="w-[700px] h-[72px] bg-grey-lighter rounded-lg px-4 py-1 flex flex-col justify-center items-start my-3">
                         <label class="font-inter font-[600] text-[12px] text-grey-light">Production Date<span
                                 class="text-[#FF0000]">*</span>
                         </label>
                         <input type="date" name="production-date" placeholder="fill production date" required
                             class="font-inter font-[400] text-grey-light text-[14px] w-full bg-grey-lighter outline-none" />
                     </div>

                     <div
                         class="w-[700px] h-[72px] bg-grey-lighter rounded-lg px-4 py-1 flex flex-col justify-center items-start my-3">
                         <label class="font-inter font-[600] text-[12px] text-grey-light">Production Category<span
                                 class="text-[#FF0000]">*</span>
                         </label>
                         <input type="text" name="production-category" placeholder="fill production category" required
                             class="font-inter font-[400] text-grey-light text-[14px] w-full bg-grey-lighter outline-none" />
                     </div>

                     <div
                         class="w-[700px] h-[72px] bg-grey-lighter rounded-lg px-4 py-1 flex flex-col justify-center items-start my-3">
                         <label class="font-inter font-[600] text-[12px] text-grey-light">Manufacturer<span
                                 class="text-[#FF0000]">*</span>
                         </label>
                         <input type="text" name="manufacturer" placeholder="fill manufacturer" required
                             class="font-inter font-[400] text-grey-light text-[14px] w-full bg-grey-lighter outline-none" />
                     </div>
                     <div
                         class="w-[700px] h-[72px] bg-grey-lighter rounded-lg px-4 py-1 flex flex-col justify-center items-start my-3">
                         <label class="font-inter font-[600] text-[12px] text-grey-light">image<span
                                 class="text-[#FF0000]">*</span>
                         </label>
                         <input type="file" name="image" placeholder="upload image" required
                             class="font-inter font-[400] text-grey-light text-[14px] w-full bg-grey-lighter outline-none" />
                     </div>
                     <div
                         class="w-[100px] h-[32px] rounded-xl flex justify-center items-center bg-main hover:scale-90 transition-all duration-150">
                         <button class="w-full h-full font-inter font-[600] text-grey text-[12px]">Publish </button>
                     </div>
                 </form>
             </div>

         </div>
     </div>
 @endsection

@extends('layouts.site')
@section('content')



<div class="container custom-block">
<ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">
                                DIY Infrareds Sauna Assistant
                            </li>
                    </ol>
<h1 class="title">DIY Infrareds Sauna Assistant</h1>














 <main role="main">

     
        <div class="container">
          <p class="lead text-muted">Here’s an expanded list of eleven key aspects to consider when assembling your DIY Infrared Sauna:</p> 
        </div>


      <div class=" py-5 row">
   

@include('blocks.stepbystep.step',['card_title'=> '1. Safety Features',
'card_description'=> 'Choose panels with built-in safety features, such as heat sensors, and check for certifications like UL listing to ensure quality and safety',
'card_link'=> '/diy-infrared-sauna-safety-features.html','image_link' => '/images/steps/1safety.jpg'
])

@include('blocks.stepbystep.step',['card_title'=> '2. Power Considerations',
'card_description'=> 'Make sure you have the right power setup for installation, opting for professional help if needed for handling electrical configurations',
'card_link'=> '#','image_link' => '/images/steps/electricy2.jpg'
])

@include('blocks.stepbystep.step',['card_title'=> '3. Panel Placement',
'card_description'=> 'Install panels uniformly across the sauna interior to ensure even heat distribution for a consistent experience.',
'card_link'=> '#','image_link' => '/images/steps/panels1.jpg'
])


@include('blocks.stepbystep.step',['card_title'=> '4. Testing Your Setup',
'card_description'=> 'Once assembled, thoroughly test each component for function and even heat distribution before regular use.',
'card_link'=> '#','image_link' => '/images/steps/4testing.jpg'
])

@include('blocks.stepbystep.step',['card_title'=> '5. Ease of Purchase:',
'card_description'=> 'Vet suppliers thoroughly, considering customer reviews and brand reputation to choose quality panels for your sauna.',
'card_link'=> '#','image_link' => '/images/steps/5purchase.jpg'
])
          

@include('blocks.stepbystep.step',['card_title'=> '6. Material Quality',
'card_description'=> 'Invest in panels made from durable materials like ceramic or carbon fiber to ensure efficient and safe infrared heat.',
'card_link'=> '#','image_link' => '/images/steps/6quality.jpg'
])
          

@include('blocks.stepbystep.step',['card_title'=> '7. Energy Efficiency:',
'card_description'=> 'Aim for panels that offer quick heating and maintain temperature effectively, which enhances usability and reduces running costs.',
'card_link'=> '#','image_link' => '/images/steps/7energy.jpg'
])
          

@include('blocks.stepbystep.step',['card_title'=> '8. Warranty and Support',
'card_description'=> 'Look for products with a solid warranty and dependable customer support for assurance and future troubleshooting.',
'card_link'=> '#','image_link' => '/images/steps/8warranty.jpg'
])
          

@include('blocks.stepbystep.step',['card_title'=> '9. Installation Assistance',
'card_description'=> 'Don’t hesitate to contact professionals or use company resources if you encounter any issues during installation to ensure proper setup.',
'card_link'=> '#','image_link' => '/images/steps/panels1.jpg'
])
<div class="mb-12">       
Remember, at DIY Infrared Sauna, we're always here to assist you in designing, selecting, and advising on all aspects of your personal infrared sauna construction.
    
</div>        
        </div>    

    </main>
</div>
@endsection
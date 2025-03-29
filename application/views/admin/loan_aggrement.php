<!DOCTYPE html>
<html lang="sw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOMU YA MAOMBI YA MKOPO</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 10px 20px; }
        h2, h3 { text-align: center; margin-top: 10px; margin-bottom: 10px; }
        .section { margin-bottom: 5px; }
        .signature { margin-top: 10px; }
        .header { display: flex; align-items: center; justify-content: space-between; }
        .logo { text-align: center; margin-bottom: 10px; }
        .passport { width: 100px; height: 120px; border: 1px solid #000; }
    </style>
</head>
<body>
    <div class="header">

    
    <img src="<?=  $customer->passport; ?>" alt="Passport Image" class="passport">
    

        <div class="logo">
            <img src="logo.png" alt="Company Logo" width="150">
        </div>
    </div>
    <h2>FOMU YA MAOMBI YA MKOPO</h2>
    
   
    <div class="section">
        <p>Mkataba umefanyika leo tarehe __________________ kati ya <strong><?= $compdata->comp_name ?></strong> <strong><?= $compdata->adress ?></strong> Na <strong><?= strtoupper($customer->f_name) . " " . strtoupper($customer->m_name) . " " . strtoupper($customer->l_name) ?></strong>
        wa mtaa <strong><?= $customer->street ?></strong>  SIMU <strong><?= $customer->phone_no; ?></strong>.</p>
        <p>Mkopaji anakubaliana na majukumu yote yaliyomo kwenye mkataba huu na anakiri kudaiwa na <?= $compdata->comp_name ?> kiasi cha Tsh <strong><?= $customer->how_loan;?></strong>  Na kwamba mkopo huu umeombwa kwa madhumuni ya <strong><?= $customer->reason ?></strong> .Mkopeshwaji na mkopeshaji wamekubaliana kuwa dhamana zilizowekwa ni mali ya mkopeshaji mpaka mkopo utakapolipwa kikamilifu. Endapo mkopaji hatalipa mkopo kulingana na makubaliano, <strong><?= $compdata->comp_name ?></strong> itakuwa na haki ya kuchukua dhamana bila kupitia mahakama
       
    </p>
        
    </div>
    
   
    
   
    
    <div class="signature">
        <h3>SAHIHI YA MKOPAJI</h3>
        <p>JINA: <strong><?= strtoupper($customer->f_name) . " " . strtoupper($customer->m_name) . " " . strtoupper($customer->l_name) ?></strong></p>
        <p>SAHIHI: ________________________ SIMU:<?= $customer->phone_no; ?></p>
    </div>
    
    
    <div class="signature">
        <h3>AFISA WA KAMPUNI</h3>
        <p>JINA: <?= $customer->empl_name ;?></p>
        <p>SAHIHI: ________________________ 
    </div>

</body>
</html>

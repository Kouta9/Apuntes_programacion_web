<?php 

$variable = 1;
switch ($variable) {
        case '1':
        print('se ejecuto');
        break;
    
    default:
        case '2':
        case '3':
        case '4':
        case '5':
            print("case muñtiple");
        break;

    default:
    print("no se ejecuto");
    break;
}

// endswitch se puede usar en lugar de las llaves


?>
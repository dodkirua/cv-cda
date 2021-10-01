export function random_color() {
    let rgb = '';
    let hex;
    for (let i = 0 ; i < 6; i++){
        hex = Math.ceil(Math.random()*15);
        switch (hex){
            case 10 :
                hex = 'A';
                break;
            case 11 :
                hex = 'B';
                break;
            case 12 :
                hex = 'C';
                break;
            case 13 :
                hex = 'D';
                break;
            case 14 :
                hex = 'E';
                break;
            case 15 :
                hex = 'F';
                break;
            default :
                break;
        }
        rgb += hex;
    }
    return rgb;
}

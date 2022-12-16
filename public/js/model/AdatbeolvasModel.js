class AdatBeolvasModell
{
    #adatokTomb=[];
    constructor(token)
    {
        console.log("adatbeolvas modell");
        this.token=token;
    }

    adatModosit(adat)
    {
        console.log("Modelben módosít",adat);
    }

    adatBe(vegpont, myCallBack) 
    {
        console.log(vegpont);
        fetch(vegpont, 
        {
            method: 'GET',
            headers: 
            {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': this.token,
            }
        })
            .then((response) => response.json())
            .then((data) => 
            {
                this.#adatokTomb = data;
                console.log(this.#adatokTomb);
                myCallBack(this.#adatokTomb);
            })
            .catch((error) => 
            {
                console.error('Error:', error);
            });
    }
}

export default AdatBeolvasModell;
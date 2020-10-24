
$.ajax({
    type: 'GET',							//Tipo de envio o pedido
        url: 'https://global.apis.naver.com/commentBox/cbox/web_neo_list_advanced_jsonp.json?ticket=globalv&templateId=talk_ssl&pool=cbox4&_callback=gpc_list&lang=es&country=AR&objectId=199842&categoryId=&pageSize=15&indexSize=10&groupId=&listType=OBJECT&pageType=more&page=26&refresh=false&current=2062088538&prev=2062088538',							//Url
        data: {},			//Datos de envio
    beforeSend: ()=>{						//Antes de enviar, ejecutar
    console.log('Enviando datos');
    },
    // timeout:2000							//Tirar un error si pasan 2 seg
    })
    .always( response =>{						//Siempre se ejecuta
    console.log('La operacion a terminado con el resultado',response);
    });
    

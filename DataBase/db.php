<?php

include __DIR__.'/../Models/Products.php';


$products = [
    new Products ('Corda Osso','Gioco','Corda/Tessuto','4.13',new Genre('Cane'),'https://arcaplanet.vtexassets.com/arquivos/ids/223…jpg?v=1770726896&quality=1&width=1800&height=1800'),
    new Products ('Monge All Breeds Adult Salmone e Riso','Nutrizione','Crocchette','44.99',new Genre('Cane'),'https://arcaplanet.vtexassets.com/arquivos/ids/270…jpg?v=1770733930&quality=1&width=1800&height=1800'),
    new Products ('Distributore Automatico Cibo Doppio','Distributori','Plastica','29.90',new Genre('Cane'),'https://arcaplanet.vtexassets.com/arquivos/ids/224…jpg?v=1770730937&quality=1&width=1800&height=1800'),
    new Products ('Gioco Bacchetta per Gatto con Topini','Gioco','Legno/Corde','2.80',new Genre('Gatto'),'https://arcaplanet.vtexassets.com/arquivos/ids/273…jpg?v=1770724280&quality=1&width=1800&height=1800'),
    new Products ('Natural Trainer Gatto Sterilised Salmone','Nutrizione','Crocchette','14.49',new Genre('Gatto'),'https://arcaplanet.vtexassets.com/arquivos/ids/284…jpg?v=1770733897&quality=1&width=1800&height=1800'),
    new Products ('Trasportino Caravan','Trasportini','Plastica/Metallo','118.30',new Genre('Gatto'),'https://arcaplanet.vtexassets.com/arquivos/ids/225…jpg?v=1770682698&quality=1&width=1800&height=1800'),
];
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourPlan;
use App\Mail\MailNotify;
use Redirect;
use Session;
use Mail;

class TourPlanController extends Controller
{
    function showTourPlanPageWithData($locale,$tour_id) {
        $data = [];

        if ($locale == "en") {
            if ($tour_id == 1) {
                $data = [
                    'image'=>'1_5.jpg',
                    'title'=>'The Normandy Tour',
                    'descriptions'=>[
                        'Normandy has several places and traditions classified or listed as World Heritage by UNESCO, but also villages classified among the "Most beautiful villages in France" and spas. Beyond these remarkable sites, and many beautiful detours, each town and village in Normandy is to be discovered!',
                        'NEHLA VTC PARIS offers to take you to visit this city, rich in history. We offer you to visit the most famous tourist places or you can also select by yourself which sites that you want to visit. We are at your disposal to send you a personalized quote, you just have to tell us the number of passengers, the duration of the excursion and the tourist places that you absolutely want to see. You will receive a quote within 24 hours. So don\'t wait any longer and send us your request on contact@nehlavtcparis.com '
                    ],
                    'place_title'=>'THE MOST KNOWN SITES IN NORMANDY',
                    'place_description'=>'From Mont-Saint-Michel to Tréport, from Cherbourg to Alençon, Normandy offers a fantastic mosaic of landscapes. Explore places steeped in history, take advantage of wide open spaces and meet the local population.',
                    'places'=>[
                        [
                            'name'=>'1. The cliffs of Étretat',
                            'description'=>'Time, storms and an underground river have sculpted Normandy\'s most famous natural site in chalk: immaculate white cliffs to which erosion has given spectacular shapes, inspiring both painters and visitors. The site, crisscrossed by hiking trails, is an ideal getaway for those who want a breath of fresh air. A word of advice: avoid spring bridges and high summer, when the cliffs are overcrowded.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'2. Rouen',
                            'description'=>'Port city built 120 km from the sea, Rouen is above all a city of art and history, marked by great artistic figures such as Flaubert, Monet or Corneille. Its historic center conceals many traces of a prosperity built on maritime trade and the textile industry: cathedral, Saint-Ouen abbey, Saint-Maclou church, courthouse... Largely pedestrianized, the city, crowned capital of the new region.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'3. Mont Saint-Michel',
                            'description'=>'A village, an abbey and a natural site blended into a harmonious unity of place, human constructions sublimely staged by nature, a setting that evolves according to the movements of the clouds, the tides, the sun and the sand... the Mont- Saint-Michel is all of these things at the same time. One of the most visited tourist sites in France, listed on the UNESCO World Heritage List since 1979, the Mont is a place to fully appreciate and preserve, against all odds.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'4. Honfleur',
                            'description'=>'The first vision is a postcard image: slate houses reflecting in the peaceful waters of the Vieux Bassin. But the port from which Samuel de Champlain sailed to found the city of Quebec is more than that. Both Norman and Parisian, more and more frequented by its Belgian and British neighbours, Honfleur manages to remain traditional while being firmly rooted in its time. The city is as touristic on weekends and during the summer months as it is peaceful during the week off season.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'5. Deauville–Trouville',
                            'description'=>'Only separated by the bed of the Touques, Deauville the socialite and Trouville the family form a universe apart. On one side, a seaside resort created by Parisian notables and self-proclaimed “21st arrondissement of Paris”; on the other, a Norman port discovered by artists and popularized by the fashion for sea bathing and paid holidays. Everyone will find their happiness in one or the other.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'6. Caen',
                            'description'=>'Inseparable from its Memorial, a vibrant tribute to peace, the prefecture of Calvados knew how to reinvent itself after the Second World War. Active, student, cultural, the former industrial city and large commercial port seduces with its narrow streets, its Place Saint-Sauveur and its abbeys. Alongside a city center rebuilt after the war, they recall the past of this city which experienced its golden age under William the Conqueror.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'7. Bayeux',
                            'description'=>'Miraculously spared by the bombardments of 1944, Bayeux has retained its character despite the passage of centuries and armies. Formerly one of the flagship cities of the Duchy of Normandy, it attracts visitors with the atmosphere of its narrow streets, its historic buildings and its memorial sites linked to the Second World War, but also and above all with its astonishing tapestry (in fact an embroidery), 70 m long, striking testimony to Norman history inscribed on the UNESCO World Heritage List.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'8. The Pays d\'Auge',
                            'description'=>'For many, the “real Normandy”, that of green and greasy grass, thatched cottages and half-timbered houses. Remained "in its own juice" despite the proximity of the capital and the seaside resorts of the coast, the Pays d\'Auge smells good of the soil and has kept a touch of rusticity. On the program: apples, cider, cheeses, horses, fresh air, and above all the satisfaction of finding countryside spots that give meaning to the word “bucolic”.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'9. Le Havre',
                            'description'=>'Surprise in 2005: Le Havre is inscribed on the UNESCO World Heritage List. This city almost invariably described under its only industrial face would it have hidden attractions? Not so hidden, in fact. And even frankly monumental: largely destroyed by the bombings of 1944, the great Norman port was rebuilt by a visionary architect, Auguste Perret, and has never ceased to interest avant-garde designers. In Le Havre, concrete has a story to tell',
                            'advice'=>null
                        ],
                        [
                            'name'=>'10. The landing beaches',
                            'description'=>'They do not form the most attractive coastline in Normandy, but the beaches chosen for the Allied landings in June 1944 are nevertheless among the most fascinating sites in the region. Plunging visitors back into one of the most glorious and dramatic episodes in the history of the 20th century, these places of memory leave no one indifferent. From the Côte de Nacre to the beginning of the Cotentin, each beach, site, memorial and cemetery tells a particular human story.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'11. Cherbourg',
                            'description'=>'Cherbourg has a taste for records: not content with having the largest artificial harbor in the world – 1,500 ha protected by a 4 km dyke –, the port has offered itself the deepest aquarium in Europe (11 m), which the Cité de la Mer unveils to the delighted eyes of visitors, while Le Redoutable, another attraction of this oceanographic museum, is the largest submarine open to the public.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'12. Le Bec-Hellouin',
                            'description'=>'As you approach Bec-Hellouin, only the Saint-Nicolas tower, the remnant of a huge church, sticks out from the trees surrounding the abbey nestled in the green valley. Founded in 1034, it was a high place of intellectual and theological life in the Middle Ages: an almost millennial history, interrupted by the Revolution, restored and extended by a new monastic community since 1948. A stay at Bec-Hellouin allows you to appreciate the rejuvenating calm of the flowery village, with barely more than 400 inhabitants, whose small half-timbered houses cross the centuries to the peaceful rhythm of the bells of the abbey',
                            'advice'=>null
                        ],
                        [
                            'name'=>'13. Granville and the Chausey Islands',
                            'description'=>'Normandy also has its “rock”: surrounded by romantic ramparts and having counted Christian Dior among its prestigious inhabitants, who left a superb museum there, Granville is also the port of entry to the largest archipelago in Europe. The number of Chausey Islands would vary from 52 at high tide to 365 at low tide, i.e. the number of weeks and days in a year... A land of deep poetry, skinned alive, and frequented just as much by fishermen for its abundant fish than by the quarries for its granite… and by 200 species of birds which make it a protected area',
                            'advice'=>null
                        ],
                        [
                            'name'=>'14. Dieppe',
                            'description'=>'To try it is to adopt it, say its fans. Little-known Dieppe is indeed not lacking in attractions. In addition to its atmosphere which knows how to be both a port and a seaside resort, and its activities on land and at sea, the city is distinguished by its heritage: historic heart partly pedestrianized, superb Saint-Jacques church, Pollet district with old fishermen\'s houses in brick… Let\'s add a secret weapon of the city and its surroundings: skies which inspired the greatest artists, in particular Delacroix and Monet',
                            'advice'=>null
                        ],
                        [
                            'name'=>'15. Barfleur',
                            'description'=>'Human constructions and natural landscapes sometimes combine to create exceptional sites. This is the case of Barfleur, a tiny port which nevertheless occupies a large place on the Normandy coast. Hailed as one of the “most beautiful villages in France”, Barfleur owes its beauty to the harmony of its granite houses set on a spit of land advancing into the waters of the Cotentin, like a finger pointing at England. A legend reports that it was here that the ship was built that took William from Normandy to Hastings in 1066.',
                            'advice'=>null
                        ],
                    ]
                ];
            } else if ($tour_id == 2) {
                $data = [
                    'image'=>'3_2.jpg',
                    'title'=>'The Euroupe Tour',
                    'descriptions'=>[
                        'Are you planning to embark on one of the most exotic adventures through a tour of Europe? Whether it\'s a thoughtful project or a sudden desire, do you want to go on an adventure on European roads? NEHLA VTC PARIS offers to accompany you there by van or car according to your needs. The continent conceals a great diversity of breathtaking landscapes. Taking a road trip in Europe allows you to explore them in complete freedom: stop wherever you want and reclaim the trip. Awaken your curiosity and get off the beaten track on a road trip in Europe.',
                        'Send us your request by email, specifying the number of passengers, the duration of the stay and the itinerary you wish to follow, indicating the countries that you will like the most. We will analyze your request and we will offer you the best route with your preferences and at the best price. If you have no idea and really want to go on an adventure trust us and we will suggest an itinerary with the essential places to visit adapted for you. So convinced? Write to us on contact@nehlavtcparis.com '
                    ],
                    'place_title'=>'SOME IDEAS OF PLACES TO STOP DURING A TOUR OF EUROPE',
                    'place_description'=>null,
                    'places'=>[
                        [
                            'name'=>'1.	The Amalfi Coast – Italy',
                            'description'=>'The Amalfi Coast which stretches from Sorrento to Salerno has the reputation of being one of the most beautiful coasts in Europe. The narrow road winds along the coast between steep mountains on one side and crystal clear sea on the other. All along this road you will find small picturesque villages perched on the edge of the cliff, and above all you will face breathtaking landscapes. North of Sorrento you will find the Bay of Naples, Pompeii and the famous Vesuvius.',
                            'advice'=>'In July and August, expect traffic jams along the coast, the road being narrow and winding, and the tourists very numerous.'
                        ],
                        [
                            'name'=>'2.	Finistere – France',
                            'description'=>'Brittany is a region that attracts many tourists, for its grandiose and perfectly preserved landscapes, and for its proudly affirmed culture and traditions. In the very west of Brittany is the most preserved department of the region, Finistère. Start from Roscoff in the north and follow the coast towards the west and the most western point of France. You will arrive at the city of Brest, a military port whose city is not too interesting but whose surroundings are worth the detour and in particular the Crozon Peninsula.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'3.	The Highland Coast – Scotland',
                            'description'=>'A road trip in a van to discover Scotland is above all to discover magical landscapes, lakes as far as the eye can see and castles every 3 kilometres. The west coast of the Highlands is probably the best way to experience the real Scotland. Start from the south where you can discover deep fjords to go north and its great wilderness. On the road you will discover a multitude of castles and small remote villages.',
                            'advice'=>'The Scottish weather is very capricious, plan what to protect yourself from the rain and the wind, and this in all seasons, but also sunscreen!'
                        ],
                        [
                            'name'=>'4.	The Algarve Coast – Portugal',
                            'description'=>'The Amalfi Coast which stretches from Sorrento to Salerno has the reputation of being one of the most beautiful coasts in Europe. The narrow road winds along the coast between steep mountains on one side and crystal clear sea on the other. All along this road you will find small picturesque villages perched on the edge of the cliff, and above all you will face breathtaking landscapes. North of Sorrento you will find the Bay of Naples, Pompeii and the famous Vesuvius.',
                            'advice'=>'If you can, visit the region in the off season, the weather is generally very pleasant and the flow of tourists less important'
                        ],
                        [
                            'name'=>'5. The Great Lakes Region – Finland',
                            'description'=>'When we think of Finland, we instantly think of forests as far as the eye can see and colorful chalets on the shores of lost lakes or fjords. It is this typical side of Finland that we invite you to explore on the side of the Great Lakes region, located in the south of the country. Departing from Helsinki, the Finnish capital, head east, and follow the coast to discover the majestic fjords or go inland to discover the famous lakes. Lake Saimaa, the largest lake in Finland, is a leading destination for outdoor and nature activities.',
                            'advice'=>'Going in a converted van is probably the best way to discover Finland, it is possible to stop where you want, or to choose to spend the night in a dedicated camping area.'
                        ],
                    ]
                ];
            } else if ($tour_id == 3) {
                $data = [
                    'image'=>'2_3.jpg',
                    'title'=>'The Paris City Tour',
                    'descriptions'=>[
                        'Experience a beautiful tour of Paris. A tour of Paris by van or car is the ideal tour for a first visit to Paris.You will live an extraordinary moment during a city tour by car. Panoramic views will allow you to discover the essential Parisian sites, such as the Opéra Garnier, the Eiffel Tower, or the Champs Elysées. Throughout this visit, we will make stops so that you can immerse yourself as much as possible in the history of the most famous monuments and districts of Paris, in the atmosphere of the time',
                        'Among the places you will see in front of you, you will find the Louvre, and that of Orsay, the lively district of Saint Germain des Prés, the Notre-Dame de Paris cathedral or even the bookstores on the banks of the Seine reflecting the real Paris.',
                        'NEHLA VTC PARIS offers you the possibility of selecting specific places so that the experience is really adapted to your request and that you leave fully satisfied. Do not hesitate to contact us by email on contact@nehlavtcparis.com specifying the number of passengers and the districts or monuments that you absolutely want to see or trust us and we will offer you a complete experience in the city of Paris.'
                    ],
                    'place_title'=>'SOME UNMISSABLE PLACES IN PARIS',
                    'place_description'=>null,
                    'places'=>[
                        [
                            'name'=>'1.	Louvre Museum',
                            'description'=>'Former palace of kings, the Louvre has embraced the history of France for eight centuries. Conceived since its creation in 1793 as a universal museum, its collections, which are among the most beautiful in the world, cover several millennia and a territory that extends from America to the borders of Asia.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'2.	Orsay Museum',
                            'description'=>'Known worldwide for its rich collection of Impressionist art, the Musée d\'Orsay is also the museum of all artistic creation in the Western world from 1848 to 1914. Its collections represent all forms of expression, from painting to architecture, through sculpture, decorative arts, photography.You will also not fail to be dazzled by the beauty of the place: a palace-like station inaugurated for the 1900 Universal Exhibition.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'3.	Notre-Dame de Paris cathedral',
                            'description'=>'Notre-Dame Cathedral in Paris, a masterpiece of Gothic architecture, is the most visited monument in France. Located in the historic center of Paris, at the end of the Ile de la Cité, its construction began in the Middle Ages.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'4.	Eiffel Tower',
                            'description'=>'Symbol of Paris and more broadly of France, the Eiffel Tower was built by Gustave Eiffel for the Universal Exhibition of 1889. It is one of the most visited monuments in the world.From the discovery of the historic gardens to the dazzling view of Paris from the top, discovering the Tower is an incredible emotion.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'5.	Triumphal arch',
                            'description'=>'A unique view of the Champs Élysées, the most beautiful avenue in the world. It houses the tomb of the unknown soldier whose flame is rekindled every evening. From the terrace, you can admire, day and night, a unique panorama of the Champs Élysées.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'6.	Big palace',
                            'description'=>'The Grand Palais is one of the most emblematic Parisian monuments. Built for the Universal Exhibition of 1900, it is recognizable by its large glass dome flanked by the French flag.',
                            'advice'=>null
                        ],
                    ]
                ];
            }
        } else if ($locale == "fr") {
            /*
                have to translate frnch language
            */
            if ($tour_id == 1) {
                $data = [
                    'image'=>'1_5.jpg',
                    'title'=>'Le Tour de Normandie',
                    'descriptions'=>[
                        'La Normandie compte plusieurs lieux et traditions classés ou inscrits au patrimoine mondial de l\'UNESCO, mais aussi des villages classés parmi les "Plus beaux villages de France" et des stations thermales. Au-delà de ces sites remarquables, et de nombreux détours magnifiques, chaque ville et village de Normandie est à découvrir !',
                        'NEHLA VTC PARIS vous propose de vous emmener voir cette ville riche en histoire. Nous vous proposons de vous faire visiter les lieux touristiques les plus célèbres ou bien vous pouvez également vous même sélectionner les sites que vous souhaitez visiter. Nous sommes à votre disposition pour vous envoyer un devis personnalisé, il vous suffit de nous indiquer le nombre de passagers, la durée de l\'excursion et les lieux touristiques que vous souhaitez absolument voir. Vous recevrez un devis sous 24h. Alors n\'attendez plus et adressez-nous votre demande sur contact@nehlavtcparis.com '
                    ],
                    'place_title'=>'LES SITES LES PLUS CONNUS DE NORMANDIE',
                    'place_description'=>'Du Mont-Saint-Michel au Tréport, de Cherbourg à Alençon, la Normandie offre une fantastique mosaïque de paysages. Explorez des lieux chargés d\'histoire, profitez de grands espaces et rencontrez la population locale.',
                    'places'=>[
                        [
                            'name'=>'1. Les falaises d\'Étretat',
                            'description'=>'Le temps, les tempêtes et une rivière souterraine ont sculpté dans la craie le site naturel le plus célèbre de Normandie : des falaises d\'un blanc immaculé auxquelles l\'érosion a donné des formes spectaculaires, inspirant peintres et visiteurs. Le site, sillonné de sentiers pédestres, est une escapade idéale pour ceux qui souhaitent prendre un bol d\'air frais. ',
                            'advice'=>null
                        ],
                        [
                            'name'=>'2. Rouen',
                            'description'=>'Ville portuaire bâtie à 120 km de la mer, Rouen est avant tout une ville d\'art et d\'histoire, marquée par de grandes figures artistiques comme Flaubert, Monet ou Corneille. Son centre historique recèle de nombreuses traces d\'une prospérité bâtie sur le commerce maritime et l\'industrie textile : cathédrale, abbaye Saint-Ouen, église Saint-Maclou, palais de justice... Largement piétonne, la ville, capitale sacrée de la nouvelle région.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'3. Mont Saint-Michel',
                            'description'=>'Un village, une abbaye et un site naturel fondus dans une harmonieuse unité de lieu, des constructions humaines sublimement mises en scène par la nature, un décor qui évolue au gré des mouvements des nuages, des marées, du soleil et du sable... le Mont-Saint-Michel, c\'est tout cela à la fois. L\'un des sites touristiques les plus visités de France, inscrit sur la liste du patrimoine mondial de l\'UNESCO depuis 1979, le Mont est un lieu à apprécier pleinement et à préserver, envers et contre tout…',
                            'advice'=>null
                        ],
                        [
                            'name'=>'4. Honfleur',
                            'description'=>'La première vision est une image de carte postale : des maisons d\'ardoise se reflétant dans les eaux paisibles du Vieux Bassin. Mais le port d\'où Samuel de Champlain a navigué pour fonder la ville de Québec est plus que cela. A la fois normande et parisienne, de plus en plus fréquentée par ses voisins belges et britanniques, Honfleur parvient à rester traditionnelle tout en étant bien ancrée dans son époque. La ville est aussi touristique le week-end et pendant les mois d\'été que paisible la semaine hors saison.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'5. Deauville–Trouville',
                            'description'=>'Seulement séparées par le lit des Touques, Deauville la mondaine et Trouville la familiale forment un univers à part. D\'un côté, une station balnéaire créée par des notables parisiens et autoproclamée « 21e arrondissement de Paris » ; de l\'autre, un port normand découvert par les artistes et popularisé par la mode des bains de mer et des congés payés. Chacun trouvera son bonheur dans l\'un ou l\'autre.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'6. Caen',
                            'description'=>'Indissociable de son Mémorial, vibrant hommage à la paix, la préfecture du Calvados a su se réinventer après la Seconde Guerre mondiale. Active, étudiante, culturelle, l\'ancienne cité industrielle et grand port de commerce séduit par ses ruelles étroites, sa place Saint-Sauveur et ses abbayes. Aux côtés d\'un centre-ville reconstruit après-guerre, ils rappellent le passé de cette ville qui connut son âge d\'or sous Guillaume le Conquérant.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'7. Bayeux',
                            'description'=>'Miraculeusement épargnée par les bombardements de 1944, Bayeux a su garder son caractère malgré le passage des siècles et des armées. Autrefois l\'une des villes phares du Duché de Normandie, elle attire les visiteurs par l\'ambiance de ses ruelles, ses monuments historiques et ses lieux de mémoire liés à la Seconde Guerre mondiale, mais aussi et surtout par son étonnante tapisserie (en fait une broderie), long de 70 m, témoignage saisissant de l\'histoire normande inscrite sur la liste du patrimoine mondial de l\'UNESCO',
                            'advice'=>null
                        ],
                        [
                            'name'=>'8. The Pays d\'Auge',
                            'description'=>'Pour beaucoup, la « vraie Normandie », celle de l\'herbe verte et grasse, des chaumières et des maisons à colombages. Resté "dans son jus" malgré la proximité de la capitale et des stations balnéaires du littoral, le Pays d\'Auge sent bon le terroir et a gardé une touche de rusticité. Au programme : pommes, cidre, fromages, chevaux, grand air, et surtout la satisfaction de retrouver des coins de campagne qui donnent tout son sens au mot « bucolique ».',
                            'advice'=>null
                        ],
                        [
                            'name'=>'9. Le Havre',
                            'description'=>'Surprise en 2005 : Le Havre est inscrit sur la liste du patrimoine mondial de l\'UNESCO. Cette ville presque invariablement décrite sous son seul visage industriel aurait-elle des attraits cachés ? Pas si caché, en fait. Et même franchement monumental : en grande partie détruit par les bombardements de 1944, le grand port normand a été reconstruit par un architecte visionnaire, Auguste Perret, et n\'a jamais cessé d\'intéresser les designers d\'avant-garde. Au Havre, le béton a une histoire à raconter',
                            'advice'=>null
                        ],
                        [
                            'name'=>'10. Les plages du débarquement',
                            'description'=>'Elles ne forment pas le littoral le plus attractif de Normandie, mais les plages choisies pour le débarquement allié en juin 1944 comptent néanmoins parmi les sites les plus fascinants de la région. Replongeant le visiteur dans l\'un des épisodes les plus glorieux et les plus dramatiques de l\'histoire du XXe siècle, ces lieux de mémoire ne laissent personne indifférent. De la Côte de Nacre au début du Cotentin, chaque plage, site, mémorial et cimetière raconte une histoire humaine particulière.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'11. Cherbourg',
                            'description'=>'Cherbourg a le goût des records : non content d\'avoir la plus grande rade artificielle du monde - 1 500 ha protégés par une digue de 4 km -, le port s\'est offert l\'aquarium le plus profond d\'Europe (11 m), que la Cité de la Mer dévoile aux yeux ravis des visiteurs, tandis que la redoutable, autre attraction de ce musée océanographique, est le plus grand sous-marin ouvert au public.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'12. Le Bec-Hellouin',
                            'description'=>'A l\'approche du Bec-Hellouin, seule la tour Saint-Nicolas, vestige d\'une immense église, se détache des arbres qui entourent l\'abbaye nichée dans la vallée verdoyante. Fondée en 1034, elle fut un haut lieu de la vie intellectuelle et théologique au Moyen Âge : une histoire quasi millénaire, interrompue par la Révolution, restaurée et agrandie par une nouvelle communauté monastique depuis 1948. Un séjour au Bec-Hellouin permet d\'apprécier le calme ressourçant du village fleuri, d\'à peine plus de 400 habitants, dont les petites maisons à colombages traversent les siècles au rythme paisible des cloches de l\'abbaye.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'13. Granville et les îles Chausey',
                            'description'=>'La Normandie a aussi son « rocher » : entourée de remparts romantiques et ayant compté Christian Dior parmi ses prestigieux habitants, qui y ont laissé un superbe musée, Granville est aussi la porte d\'entrée du plus grand archipel d\'Europe. Le nombre d\'îles Chausey varierait de 52 à marée haute à 365 à marée basse, soit le nombre de semaines et de jours dans une année',
                            'advice'=>null
                        ],
                        [
                            'name'=>'14. Dieppe',
                            'description'=>'Le tenter, c\'est l\'adopter, disent ses fans. Dieppe méconnue ne manque en effet pas d\'attraits. Outre son ambiance qui sait être à la fois port et station balnéaire, et ses activités sur terre et sur mer, la ville se distingue par son patrimoine : cœur historique en partie piétonnier, superbe église Saint-Jacques, quartier du Pollet aux vieilles maisons de pêcheurs en briques… Ajoutons une arme secrète de la ville et de ses environs : les ciels qui ont inspiré les plus grands artistes, notamment Delacroix et Monet.',
                        ],
                        [
                            'name'=>'15. Barfleur',
                            'description'=>'Constructions humaines et paysages naturels se conjuguent parfois pour créer des sites d\'exception. C\'est le cas de Barfleur, petit port qui occupe pourtant une grande place sur la côte normande. Reconnu comme l\'un des « plus beaux villages de France », Barfleur doit sa beauté à l\'harmonie de ses maisons de granit posées sur une langue de terre qui s\'avance dans les eaux du Cotentin, comme un doigt pointé vers l\'Angleterre. Une légende rapporte que c\'est ici que fut construit le navire qui emmena Guillaume de Normandie à Hastings en 1066.',
                            'advice'=>null
                        ],
                    ]
                ];
            } else if ($tour_id == 2) {
                $data = [
                    'image'=>'3_2.jpg',
                    'title'=>'La tournée européenne',
                    'descriptions'=>[
                        'Envisagez-vous de vous lancer dans l\'une des aventures les plus extraordinaires à travers un tour d\'Europe ? Qu\'il s\'agisse d\'un projet réfléchi ou d\'une envie soudaine, vous souhaitez partir à l\'aventure sur les routes européennes ? NEHLA VTC PARIS vous propose de vous y accompagner en van ou en voiture selon vos besoins. Le continent recèle une grande diversité de paysages à couper le souffle. Faire un road trip en Europe permet de les explorer en toute liberté : arrêtez-vous où bon vous semble et profitez du voyage. Éveillez votre curiosité et sortez des sentiers battus lors d\'un road trip en Europe.',
                        'Envoyez-nous votre demande par email en précisant le nombre de passagers, la durée du séjour et l\'itinéraire que vous souhaitez suivre en indiquant les pays qui vous plaisent le plus.',
                        'Nous analyserons votre demande et nous vous proposerons le meilleur itinéraire avec vos préférences et au meilleur prix. Si vous n\'avez aucune idée et que vous voulez vraiment partir à l\'aventure faites nous confiance et nous vous proposerons un itinéraire avec les incontournables à visiter adapté pour vous. Alors convaincu ? Écrivez-nous sur contact@nehlavtcparis.com'
                    ],
                    'place_title'=>'Quelques suggestions de destination où s\'arrêter lors d\'un tour d\'Europe',
                    'place_description'=>null,
                    'places'=>[
                        [
                            'name'=>'1.	La Côte Amalfitaine – Italie',
                            'description'=>'La côte amalfitaine qui s\'étend de Sorrente à Salerne a la réputation d\'être l\'une des plus belles côtes d\'Europe. La route étroite serpente le long de la côte entre des montagnes escarpées d\'un côté et une mer cristalline de l\'autre. Tout au long de cette route vous trouverez de petits villages pittoresques perchés au bord de la falaise, et surtout vous serez confrontés à des paysages à couper le souffle. Au nord de Sorrente, vous trouverez la baie de Naples, Pompéi et le célèbre Vésuve.',
                            'advice'=>': En juillet et août, attendez-vous à des embouteillages le long de la côte, la route étant étroite et sinueuse, et les touristes très nombreux.'
                        ],
                        [
                            'name'=>'2.	Finistere – France',
                            'description'=>'La Bretagne est une région qui attire de nombreux touristes, pour ses paysages grandioses et parfaitement préservés, et pour sa culture et ses traditions fièrement affirmées. A l\'extrême ouest de la Bretagne se trouve le département le plus préservé de la région, le Finistère. Partez de Roscoff au nord et longez la côte vers l\'ouest et le point le plus occidental de la France. Vous arriverez à la ville de Brest, port militaire dont la ville n\'est pas trop intéressante mais dont les environs valent le détour et notamment la presqu\'île de Crozon.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'3.	La côte des Highlands – Ecosse',
                            'description'=>'Un road trip en van à la découverte de l\'Ecosse, c\'est avant tout découvrir des paysages magiques, des lacs à perte de vue et des châteaux tous les 3 kilomètres. La côte ouest des Highlands est probablement le meilleur moyen de découvrir la véritable Écosse. Partez du sud où vous pourrez découvrir des fjords profonds pour aller vers le nord et sa grande nature sauvage. Sur la route vous découvrirez une multitude de châteaux et de petits villages reculés.',
                            'advice'=>'La météo écossaise est très capricieuse, prévoyez de quoi vous protéger de la pluie et du vent, et ce en toutes saisons, mais aussi de la crème solaire !'
                        ],
                        [
                            'name'=>'4.	La côte de l\'Algarve - Portugal',
                            'description'=>'Située à l\'extrême sud du Portugal, la côte de l\'Algarve offre un mélange de falaises majestueuses et de plages paradisiaques, ici l\'océan Atlantique prend des airs de Méditerranée. Prenez Faro comme point de départ et prenez le temps de visiter la capitale de l\'Algarve, une ville très pittoresque, notamment à l\'intérieur des murs de la vieille ville. Partez ensuite à la découverte de la côte environnante en direction de Lagos, avec le magnifique parc naturel de Ria Formosa, les célèbres falaises et grottes marines de l\'Algarve, et les petits villages de pêcheurs typiques de la région.',
                            'advice'=>'Si vous le pouvez, visitez la région hors saison, la météo est généralement très agréable et le flux de touristes moins important'
                        ],
                        [
                            'name'=>'5. La Région des Grands Lacs – Finlande',
                            'description'=>'Quand on pense à la Finlande, on pense instantanément à des forêts à perte de vue et à des chalets colorés au bord de lacs perdus ou de fjords. C\'est ce côté typique de la Finlande que nous vous invitons à explorer du côté de la région des Grands Lacs, située au sud du pays. Au départ d\'Helsinki, la capitale finlandaise, dirigez-vous vers l\'est, et longez la côte pour découvrir les majestueux fjords ou pénétrez dans les terres pour découvrir les célèbres lacs. Le lac Saimaa, le plus grand lac de Finlande, est une destination de choix pour les activités de plein air et de nature.',
                            'advice'=>null
                        ],
                    ]
                ];
            } else if ($tour_id == 3) {
                $data = [
                    'image'=>'2_3.jpg',
                    'title'=>'La visite de la ville de Paris',
                    'descriptions'=>[
                        'Profitez d’une belle visite de Paris en van ou en voiture, un tour idéal pour une première visite à Paris !',
                        'Vous vivrez un moment extraordinaire lors d\'un tour de Paris en voiture. Des vues panoramiques vous permettront de découvrir les sites parisiens incontournables, comme l\'Opéra Garnier, la Tour Eiffel, ou les Champs Elysées. Tout au long de cette visite, nous ferons des arrêts afin que vous puissiez vous immerger au maximum dans l\'histoire des monuments et quartiers les plus célèbres de Paris, dans l\'ambiance typique parisienne.',
                        'Parmi les lieux incontournables que vous trouverez pendant la visite bien évidemment le très célèbre musée du Louvre, et celui d\'Orsay, le quartier animé de Saint Germain des Prés, la cathédrale Notre-Dame de Paris ou encore les librairies des bords de la Seine reflétant le vrai Paris.',
                        'NEHLA VTC PARIS vous offre la possibilité de sélectionner des lieux spécifiques que vous souhaitez absolument voir afin que l\'expérience soit réellement adaptée à votre demande et que vous partiez pleinement satisfait. N\'hésitez pas à nous contacter par mail sur contact@nehlavtcparis.com en précisant le nombre de passagers et les quartiers ou monuments que vous souhaitez absolument voir ou bien faites nous confiance et nous vous proposerons une expérience complète dans la ville de Paris.'
                    ],
                    'place_title'=>'QUELQUES LIEUX INCONTOURNABLES A PARIS',
                    'place_description'=>null,
                    'places'=>[
                        [
                            'name'=>'1.	Musée du Louvre',
                            'description'=>'Ancien palais des rois, le Louvre embrasse l\'histoire de France depuis huit siècles. Conçu depuis sa création en 1793 comme un musée universel, ses collections, parmi les plus belles du monde, couvrent plusieurs millénaires et un territoire qui s\'étend de l\'Amérique aux confins de l\'Asie.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'2.	Musée d\'Orsay',
                            'description'=>'Connu dans le monde entier pour sa riche collection d\'art impressionniste, le musée d\'Orsay est aussi le musée de toute la création artistique du monde occidental de 1848 à 1914. Ses collections représentent toutes les formes d\'expression, de la peinture à l\'architecture, en passant par la sculpture, les arts décoratifs, la photographie. Vous ne manquerez pas non plus d\'être éblouis par la beauté des lieux : une gare aux allures de palais inaugurée pour l\'Exposition universelle de 1900.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'3.	Cathédrale Notre-Dame de Paris',
                            'description'=>'La cathédrale Notre-Dame de Paris, chef-d\'œuvre de l\'architecture gothique, est le monument le plus visité de France. Situé dans le centre historique de Paris, au bout de l\'Ile de la Cité, sa construction débute au Moyen Âge.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'4.	Tour Eiffel',
                            'description'=>'Symbole de Paris et plus largement de la France, la Tour Eiffel a été construite par Gustave Eiffel pour l\'Exposition Universelle de 1889. C\'est l\'un des monuments les plus visités au monde. De la découverte des jardins historiques à la vue éblouissante sur Paris du haut, découvrir la Tour est une émotion incroyable.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'5.	Arc de Triomphe',
                            'description'=>'Une vue unique sur les Champs Élysées, la plus belle avenue du monde. Il abrite la tombe du soldat inconnu dont la flamme se rallume chaque soir. De la terrasse, vous pourrez admirer, de jour comme de nuit, un panorama unique sur les Champs Élysées.',
                            'advice'=>null
                        ],
                        [
                            'name'=>'6.	Le Grand Palais',
                            'description'=>'Le Grand Palais est l\'un des monuments parisiens les plus emblématiques. Construite pour l\'Exposition universelle de 1900, elle est reconnaissable à sa grande coupole de verre flanquée du drapeau français.',
                            'advice'=>null
                        ],
                    ]
                ];
            }
        }

        return view('tour_plan')->with(['data'=>$data, 'id'=>$tour_id]);
    }

    function addNewTourForCustomerByTourId(Request $tour_details) {
        // dd($tour_details);
        $data = [
            'subject'=>'We will Contact you As soon as Possible, Thank you For your Request.',
            'tour_plan'=> ($tour_details->tour_id == "1" ? "The Normandy Tour" : $tour_details->tour_id == "2") ? "The Europe Tour" : "The Paris Tour",
            'name'=>$tour_details->name,
            'email'=>$tour_details->email,
            'mobile'=>$tour_details->phone,
            'subject_title'=>$tour_details->subject,
            'message'=>$tour_details->message
        ];
        $tour_plan_table = new TourPlan();

        if ($tour_details->name != null && $tour_details->email != null && $tour_details->phone != null && $tour_details->subject != null && $tour_details->message != null) {
            $tour_plan_table->tour_id = $tour_details->tour_id;
            $tour_plan_table->name = $tour_details->name;
            $tour_plan_table->email = $tour_details->email;
            $tour_plan_table->mobile = $tour_details->phone;
            $tour_plan_table->subject = $tour_details->subject;
            $tour_plan_table->message = $tour_details->message;

            $tour_plan_table->save();
            Mail::to($tour_details->email)->send(new MailNotify($data));
            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Please Fill All Feilds.');
            return Redirect::back();
        }
    }

    function showAllRequestedTourPlans() {
        $tour_plans = TourPlan::all();

        if (Session()->has('member')) {
            return view ('view_tour_plan_requests')->with(['requsts'=>$tour_plans]);
        } else {
            return redirect('signin');
        }
    }

    function viewSelectedTourPlanById($id) {
        $tour_plan = TourPlan::where('id', $id)->first();

        if (Session()->has('member')) {
            return view('view_tour_plan_message')->with(['data'=>$tour_plan]);
        } else {
            return redirect('signin');
        }
    }

    function deleteTourRequestById($id) {
        if (Session()->has('member')) {
            TourPlan::where('id', $id)->delete();

            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Operation Not Complete.');
            return Redirect::back();
        }
    }
}

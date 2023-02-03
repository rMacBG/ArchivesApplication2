<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('events')->insert([
          [
             'name'=> 'Siege of Varna (1201)',

              'description' => 'At the turn of the new century he seized the strong castle of Constancia (near modern Simeonovgrad) and then struck in the opposite direction and besieged the last
              Byzantine stronghold to the north of the Balkan mountains, Varna. Varna was defended by a large garrison including western mercenaries who were known to be the bravest soldiers in the
              Byzantine army. To take the fortress the Bulgarian engineers constructed an enormous siege tower which was wider that the outer moat. With the help of the siege equipment the Bulgarian
               army was able to cross the moat and reach the walls of the city and on the third day of the siege, on 24 March 1201 the Bulgarians made a breakthrough. According to the Byzantine historian
               Niketas Choniates Kaloyan did not hesitate to kill all defenders despite the fact that it was Easter. The Byzantines were thrown in the moat and buried alive. This action, carried out according to George
              Acropolites as revenge for the 14 thousand blinded Bulgarian prisoners of war by Emperor Basil II "the Bulgar Slayer" after the Battle of Klyuch in 1014,when the Bulgarian tsar Samuil was defeated, earned
              Kaloyan the moniker "the Roman Slayer". After that he destroyed the city walls and returned to the capital Tarnovo.',
              'image' => 'public/storage/archives/1201 Siege.jpg'

          ],
          [
            'name'=>'Istoriya Slavyanobolgarskaya (1762)',
              'description' => 'Istoriya Slavyanobolgarskaya (Original Cyrillic: Истори́ѧ славѣноболгарскаѧ corrected from Їстори́ѧ славѣноболгарскаѧ; Bulgarian: История славянобългарска, romanized: Istoriya slavyanobalgarska, lit.  is a book by Bulgarian scholar and clergyman Saint Paisius of Hilendar. Written in 1762, it is considered Saint Paisius of Hilendars greatest work and one of the most influential pieces of the Bulgarian revival, as well as the first work of Bulgarian historiography.

    Although he was based in the Serbian monastery Hilandar, which was inhabited then mostly by Bulgarian monks, Paisius travelled extensively throughout the country and abroad and collected a vast amount of references to compile and write his concise but historically influential version of Bulgarian history. At that time the influx of Serbian monks decreased at the expense of Bulgarians, particularly from Macedonia. From the 17th to the 19th century, Hilandar was predominantly Bulgarian-populated.',
            'image' => 'public/storage/archives/Istoriya-slavyanobulgarska.jpg'
          ],
          [
            'name'=> 'Bulgarian unification',
              'description' => 'The Unification of Bulgaria (Bulgarian: Съединение на България, Saedinenie na Balgariya) was the act of unification of the Principality of Bulgaria and the province of Eastern Rumelia in the autumn of 1885.[1][2] It was co-ordinated by the Bulgarian Secret Central Revolutionary Committee (BSCRC). Both had been parts of the Ottoman Empire, but the Principality had functioned de facto independently whilst the Rumelian province was autonomous and had an Ottoman presence. The Unification was accomplished after revolts in Eastern Rumelian towns, followed by a coup on 18 September [O.S. 6 September] 1885 supported by the Bulgarian Knyaz Alexander I. The BSCRC, formed by Zahari Stoyanov, began actively popularizing the idea of unification by means of the press and public demonstrations in the spring of 1885.',
              'image' => 'public/storage/archives/Telegram-unificationBG.jpg'
          ],
          [
            'name'=>'Second Bulgarian Empire(1393)',
            'description' => 'The Second Bulgarian Empire (Middle Bulgarian: Ц(а)рьство бл(ъ)гарское;[2][3] Modern Bulgarian: Второ българско царство, romanized: Vtorо Balgarskо Tsarstvo) was a medieval Bulgarian[4][5][ambiguous] state that existed between 1185 and 1396.[6] A successor to the First Bulgarian Empire,[7][8][9][10] it reached the peak of its power under Tsars Kaloyan and Ivan Asen II before gradually being conquered by the Ottomans in the late 14th century.

Until 1256, the Second Bulgarian Empire was the dominant power in the Balkans, defeating the Byzantine Empire in several major battles. In 1205, Emperor Kaloyan defeated the newly established Latin Empire in the Battle of Adrianople. His nephew Ivan Asen II defeated the Despotate of Epiros and made Bulgaria a regional power again. During his reign, Bulgaria spread from the Adriatic to the Black Sea and the economy flourished. In the late 13th century, however, the Empire declined under constant invasions by Mongols, Byzantines, Hungarians, and Serbs, as well as internal unrest and revolts. The 14th century saw a temporary recovery and stability, but also the peak of Balkan feudalism as central authorities gradually lost power in many regions. Bulgaria was divided into three parts on the eve of the Ottoman invasion.

Despite strong Byzantine influence, Bulgarian artists and architects created their own distinctive style. In the 14th century, during the period known as the Second Golden Age of Bulgarian culture, literature, art and architecture flourished.[11] The capital city Tarnovo, which was considered a "New Constantinople", became the countrys main cultural hub and the centre of the Eastern Orthodox world for contemporary Bulgarians.[12] After the Ottoman conquest, many Bulgarian clerics and scholars emigrated to Serbia, Wallachia, Moldavia, and Russian principalities, where they introduced Bulgarian culture, books, and hesychastic ideas.[13]',
            'image'=>'public/storage/archives/Bulgaria-Iván_Asen2-es.svg.png'
          ],
          [
             'name'=>'First Tarnovo Uprising',
             'description'=> 'The First Tarnovo uprising (Bulgarian: Първо търновско въстание, Parvo tarnovsko vastanie) was a Bulgarian uprising against Ottoman rule based in the former Bulgarian capital, Tarnovo, that broke out in 1598 and was severely crushed by the Ottoman authorities.

The uprising was organized by religious leaders, as well as public figures and merchants. These included the Archbishop of Tarnovo Dionysus Rallis, the noble Theodore Ballina from Nikopol, as well as the local merchants from Ragusa Pavel Đorđić[1] and the Sorkočević brothers, with the bishops Theophanes of Lovech, Jeremiah of Rousse, Spyridon of Shumen, and Methodius of Thrace, and other high-ranking religious figures also taking part in the organization.[2] Đorđić established relations with the Habsburgs, the Transylvanian and Wallachian rulers, and a plan for the uprising was created in Vienna in 1597.[3]

The invasion of Wallachian forces under Michael the Brave in the northern Bulgarian lands in the autumn of 1598 provided good conditions for the uprising, as the fellow Christian army would support the insurrection according to the plan. At the time the Ottomans were engaged in the Long War with the Habsburg monarchy. An alleged descendant of the medieval Shishman dynasty was proclaimed Tsar of Bulgaria (as Shishman III)[3] and Tarnovo was briefly liberated, with about 12,000 people gathering.[4]',
              'image'=>'public/storage/archives/375px-First_Tarnovo_Uprising.png'
          ],
          [
              'name'=>'Great Plague of 1738',
              'description'=>'The Great Plague of 1738 was an outbreak of the bubonic plague between 1738 and 1740 that affected areas of the Habsburg Empire, now in the modern nations of Romania, Hungary, Ukraine, Serbia, Croatia, Slovakia, Czechia and Austria. Although no exact figure is available, the epidemic likely killed over 50,000 people.[citation needed]

In February 1738 the plague hit the Banat region, having been spread there by the Imperial Army.[1]

According to the 1740 Hungarian Diet, the Great Plague claimed 36,000 lives.[2]

Southeastern Transylvania may have been the hardest area hit. Over the following eight years, the plague killed a sixth of the population of Timișoara. Timișoaras St. Mary and St. John of Nepomuk Monument is dedicated to the plagues victims. The plague would return to hit the city again in 1762–1763.[3]

Other cities in the region were also stricken. Between October 1737 and April 1738, 111 deaths were reported in Zărneşti, and 70 in Codlea.[2] More than 10% of the population of Cluj-Napoca was reported to have been killed by the pandemic.[4]

The diseases spread extended to the Adriatic. It made its way to the island of Brač in modern-day Croatia',
              'image'=>'public/storage/archives/download.jpeg',
          ]
     ]);
    }
}

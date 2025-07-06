<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MbtiQuestion;
use App\Models\MbtiResult;

class MbtiDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed MBTI Questions
        $questions = [
            [
                'question' => 'Saya merasa lebih berenergi ketika berada di tengah-tengah banyak orang.',
                'dimension' => 'EI',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'E',
                'type_b' => 'I',
                'order' => 1
            ],
            [
                'question' => 'Saya lebih suka bekerja dengan fakta dan detail konkret daripada ide abstrak.',
                'dimension' => 'SN',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'S',
                'type_b' => 'N',
                'order' => 2
            ],
            [
                'question' => 'Ketika membuat keputusan, saya lebih mengandalkan logika daripada perasaan.',
                'dimension' => 'TF',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'T',
                'type_b' => 'F',
                'order' => 3
            ],
            [
                'question' => 'Saya lebih suka merencanakan semuanya dengan detail daripada bertindak spontan.',
                'dimension' => 'JP',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'J',
                'type_b' => 'P',
                'order' => 4
            ],
            [
                'question' => 'Saya merasa nyaman menjadi pusat perhatian dalam suatu acara.',
                'dimension' => 'EI',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'E',
                'type_b' => 'I',
                'order' => 5
            ],
            [
                'question' => 'Saya lebih tertarik pada kemungkinan dan potensi masa depan daripada realitas saat ini.',
                'dimension' => 'SN',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'N',
                'type_b' => 'S',
                'order' => 6
            ],
            [
                'question' => 'Saya lebih mempertimbangkan dampak keputusan terhadap orang lain daripada efisiensi.',
                'dimension' => 'TF',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'F',
                'type_b' => 'T',
                'order' => 7
            ],
            [
                'question' => 'Saya merasa tidak nyaman dengan perubahan mendadak dalam rencana.',
                'dimension' => 'JP',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'J',
                'type_b' => 'P',
                'order' => 8
            ],
            [
                'question' => 'Saya lebih suka menghabiskan waktu sendirian untuk mengisi ulang energi.',
                'dimension' => 'EI',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'I',
                'type_b' => 'E',
                'order' => 9
            ],
            [
                'question' => 'Saya lebih suka bekerja dengan instruksi yang jelas dan spesifik.',
                'dimension' => 'SN',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'S',
                'type_b' => 'N',
                'order' => 10
            ],
            [
                'question' => 'Saya merasa penting untuk menjaga harmoni dalam hubungan interpersonal.',
                'dimension' => 'TF',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'F',
                'type_b' => 'T',
                'order' => 11
            ],
            [
                'question' => 'Saya suka menjaga opsi tetap terbuka daripada membuat komitmen final.',
                'dimension' => 'JP',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'P',
                'type_b' => 'J',
                'order' => 12
            ],
            [
                'question' => 'Saya merasa mudah untuk memulai percakapan dengan orang yang baru dikenal.',
                'dimension' => 'EI',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'E',
                'type_b' => 'I',
                'order' => 13
            ],
            [
                'question' => 'Saya lebih percaya pada pengalaman praktis daripada teori atau konsep.',
                'dimension' => 'SN',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'S',
                'type_b' => 'N',
                'order' => 14
            ],
            [
                'question' => 'Saya lebih menghargai keadilan dan objektivitas daripada belas kasihan.',
                'dimension' => 'TF',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'T',
                'type_b' => 'F',
                'order' => 15
            ],
            [
                'question' => 'Saya merasa lebih produktif ketika memiliki jadwal yang terstruktur.',
                'dimension' => 'JP',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'J',
                'type_b' => 'P',
                'order' => 16
            ],
            [
                'question' => 'Saya lebih suka bekerja dalam tim daripada bekerja sendiri.',
                'dimension' => 'EI',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'E',
                'type_b' => 'I',
                'order' => 17
            ],
            [
                'question' => 'Saya sering memikirkan inovasi dan cara-cara baru untuk melakukan sesuatu.',
                'dimension' => 'SN',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'N',
                'type_b' => 'S',
                'order' => 18
            ],
            [
                'question' => 'Ketika ada konflik, saya lebih fokus pada solusi yang adil secara objektif.',
                'dimension' => 'TF',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'T',
                'type_b' => 'F',
                'order' => 19
            ],
            [
                'question' => 'Saya merasa stres ketika harus membuat keputusan dengan cepat tanpa persiapan.',
                'dimension' => 'JP',
                'option_a' => 'Sangat setuju',
                'option_b' => 'Tidak setuju',
                'type_a' => 'J',
                'type_b' => 'P',
                'order' => 20
            ]
        ];

        foreach ($questions as $question) {
            MbtiQuestion::create($question);
        }

        // Seed MBTI Results
        $results = [
            [
                'type' => 'INTJ',
                'name' => 'The Architect',
                'description' => 'Pemikir strategis yang imajinatif dengan rencana untuk segala hal. Anda adalah orang yang sangat analitis, kreatif, dan bertekad untuk mencapai tujuan Anda.',
                'strengths' => 'Pemikir strategis yang cemerlang|Sangat mandiri dan bertekad|Memiliki standar yang tinggi|Kreatif dan inovatif|Mampu melihat gambaran besar',
                'weaknesses' => 'Terlalu kritis terhadap diri sendiri dan orang lain|Sulit mengekspresikan emosi|Terkadang terlalu perfeksionis|Kurang sabar dengan hal-hal yang tidak efisien',
                'career_suggestions' => 'Arsitek|Insinyur|Ilmuwan|Konsultan Strategi|Programmer|Peneliti|Analis Sistem|Entrepreneur|Penulis|Profesor',
                'relationships' => 'INTJ menghargai hubungan yang mendalam dan bermakna. Mereka cenderung selektif dalam memilih teman dan pasangan.',
                'color' => '#6366f1'
            ],
            [
                'type' => 'INTP',
                'name' => 'The Thinker',
                'description' => 'Pemikir inovatif dengan rasa ingin tahu yang tak pernah habis tentang ide-ide baru. Anda menyukai teori dan konsep abstrak.',
                'strengths' => 'Sangat logis dan objektif|Kreatif dan inovatif|Mampu berpikir abstrak|Fleksibel dan mudah beradaptasi|Sangat analitis',
                'weaknesses' => 'Sulit mengatur waktu dan tugas|Kurang perhatian pada detail praktis|Sulit mengekspresikan emosi|Terkadang terlalu teoretis',
                'career_suggestions' => 'Peneliti|Programmer|Analis|Ilmuwan|Filsuf|Matematikawan|Penulis|Inventor|Psikolog|Konsultan',
                'relationships' => 'INTP menghargai kebebasan dan otonomi dalam hubungan. Mereka membutuhkan ruang untuk mengeksplorasi ide-ide mereka.',
                'color' => '#8b5cf6'
            ],
            [
                'type' => 'ENTJ',
                'name' => 'The Commander',
                'description' => 'Pemimpin yang tegas, imajinatif, dan berkemauan kuat - selalu menemukan cara atau menciptakan cara untuk mencapai tujuan.',
                'strengths' => 'Pemimpin alami yang kuat|Sangat percaya diri|Strategis dan terorganisir|Charismatic dan inspiratif|Efisien dan produktif',
                'weaknesses' => 'Terlalu dominan dan mengendalikan|Tidak sabar dengan ketidakefisienan|Sulit menangani emosi|Terkadang terlalu agresif',
                'career_suggestions' => 'CEO|Manajer Eksekutif|Pengacara|Konsultan Bisnis|Entrepreneur|Direktur|Hakim|Politisi|Investment Banker|Sales Manager',
                'relationships' => 'ENTJ adalah pemimpin dalam hubungan dan menghargai pasangan yang dapat mengikuti visi mereka.',
                'color' => '#ef4444'
            ],
            [
                'type' => 'ENTP',
                'name' => 'The Debater',
                'description' => 'Pemikir yang cerdas dan ingin tahu yang tidak dapat menolak tantangan intelektual. Anda suka mengeksplorasi ide-ide baru.',
                'strengths' => 'Sangat kreatif dan inovatif|Cepat berpikir dan cerdas|Fleksibel dan mudah beradaptasi|Charismatic dan menawan|Mampu melihat berbagai perspektif',
                'weaknesses' => 'Sulit fokus pada satu hal|Kurang perhatian pada detail|Sulit menyelesaikan proyek|Terkadang terlalu argumentatif',
                'career_suggestions' => 'Entrepreneur|Konsultan|Jurnalis|Pengacara|Psikolog|Marketing Manager|Public Relations|Inventor|Penulis|Dosen',
                'relationships' => 'ENTP menyukai hubungan yang dinamis dan penuh dengan diskusi intelektual yang menarik.',
                'color' => '#f59e0b'
            ],
            [
                'type' => 'INFJ',
                'name' => 'The Advocate',
                'description' => 'Idealis yang kreatif dan berprinsip yang termotivasi oleh visi pribadi mereka tentang apa yang mungkin terjadi.',
                'strengths' => 'Sangat intuitif dan empatik|Kreatif dan artistik|Berprinsip dan bermoral tinggi|Mampu menginspirasi orang lain|Fokus pada makna dan tujuan',
                'weaknesses' => 'Terlalu sensitif terhadap kritik|Perfeksionis yang ekstrem|Sulit membuat keputusan praktis|Cenderung terlalu idealis',
                'career_suggestions' => 'Psikolog|Konselor|Penulis|Guru|Pekerja Sosial|HR Manager|Seniman|Fotografer|Non-profit Worker|Terapis',
                'relationships' => 'INFJ mencari hubungan yang mendalam dan bermakna dengan komitmen jangka panjang.',
                'color' => '#10b981'
            ],
            [
                'type' => 'INFP',
                'name' => 'The Mediator',
                'description' => 'Orang yang kreatif, idealis, dan loyal - selalu mencari kemungkinan untuk kebaikan dalam situasi terburuk sekalipun.',
                'strengths' => 'Sangat kreatif dan artistik|Empatik dan pengertian|Fleksibel dan mudah beradaptasi|Loyal dan setia|Fokus pada nilai-nilai personal',
                'weaknesses' => 'Terlalu sensitif terhadap kritik|Sulit membuat keputusan|Cenderung menunda-nunda|Terkadang terlalu idealis',
                'career_suggestions' => 'Penulis|Seniman|Psikolog|Konselor|Guru|Pekerja Sosial|Fotografer|Musisi|Terapis|Non-profit Worker',
                'relationships' => 'INFP menghargai autentisitas dan kedalaman emosional dalam hubungan mereka.',
                'color' => '#06b6d4'
            ],
            [
                'type' => 'ENFJ',
                'name' => 'The Protagonist',
                'description' => 'Pemimpin yang inspiratif dan karismatik, mampu memotivasi pendengar untuk mencapai tujuan bersama.',
                'strengths' => 'Pemimpin yang inspiratif|Sangat empatik dan pengertian|Komunikator yang excellent|Mampu memotivasi orang lain|Fokus pada pengembangan orang lain',
                'weaknesses' => 'Terlalu fokus pada orang lain|Sulit mengatakan tidak|Terlalu sensitif terhadap kritik|Cenderung mengabaikan kebutuhan sendiri',
                'career_suggestions' => 'Guru|Konselor|HR Manager|Pelatih|Politisi|Public Relations|Pekerja Sosial|Psikolog|Sales Manager|Non-profit Leader',
                'relationships' => 'ENFJ adalah partner yang mendukung dan selalu berusaha membantu pasangan mereka berkembang.',
                'color' => '#ec4899'
            ],
            [
                'type' => 'ENFP',
                'name' => 'The Campaigner',
                'description' => 'Jiwa bebas yang antusias, kreatif, dan sosial - selalu dapat menemukan alasan untuk tersenyum.',
                'strengths' => 'Sangat antusias dan energik|Kreatif dan inovatif|Excellent dalam komunikasi|Fleksibel dan mudah beradaptasi|Mampu menginspirasi orang lain',
                'weaknesses' => 'Sulit fokus pada detail|Cenderung menunda-nunda|Terlalu optimis|Sulit mengikuti rutinitas',
                'career_suggestions' => 'Marketing Manager|Public Relations|Jurnalis|Konselor|Guru|Seniman|Entrepreneur|Event Planner|Psikolog|Sales Representative',
                'relationships' => 'ENFP membawa kegembiraan dan spontanitas dalam hubungan mereka.',
                'color' => '#f97316'
            ],
            [
                'type' => 'ISTJ',
                'name' => 'The Logistician',
                'description' => 'Individu yang praktis dan berorientasi pada fakta - keandalan mereka tidak dapat diragukan.',
                'strengths' => 'Sangat dapat diandalkan|Terorganisir dan metodis|Bertanggung jawab|Loyal dan setia|Praktis dan realistis',
                'weaknesses' => 'Resisten terhadap perubahan|Terlalu kaku dalam aturan|Sulit mengekspresikan emosi|Cenderung terlalu konservatif',
                'career_suggestions' => 'Akuntan|Auditor|Manajer Operasional|Analis Keuangan|Administrator|Insinyur|Dokter|Pengacara|Banker|Project Manager',
                'relationships' => 'ISTJ adalah partner yang stabil dan dapat diandalkan dalam hubungan jangka panjang.',
                'color' => '#64748b'
            ],
            [
                'type' => 'ISFJ',
                'name' => 'The Protector',
                'description' => 'Pelindung yang hangat dan berdedikasi, selalu siap membela orang yang mereka cintai.',
                'strengths' => 'Sangat peduli dan mendukung|Dapat diandalkan|Detail-oriented|Loyal dan setia|Praktis dan realistis',
                'weaknesses' => 'Terlalu mengutamakan orang lain|Sulit mengatakan tidak|Resisten terhadap perubahan|Terlalu sensitif terhadap kritik',
                'career_suggestions' => 'Perawat|Guru|Konselor|Pekerja Sosial|HR Specialist|Administrator|Dokter|Terapis|Librarian|Customer Service',
                'relationships' => 'ISFJ adalah partner yang sangat peduli dan selalu mengutamakan kebahagiaan pasangan mereka.',
                'color' => '#84cc16'
            ],
            [
                'type' => 'ESTJ',
                'name' => 'The Executive',
                'description' => 'Administrator yang excellent, tak tertandingi dalam mengelola hal-hal atau orang.',
                'strengths' => 'Pemimpin yang kuat|Sangat terorganisir|Praktis dan efisien|Dapat diandalkan|Fokus pada hasil',
                'weaknesses' => 'Terlalu kaku dan infleksibel|Sulit menangani emosi|Terlalu fokus pada aturan|Tidak sabar dengan ketidakefisienan',
                'career_suggestions' => 'Manajer|Direktur|Administrator|Pengacara|Banker|Sales Manager|Project Manager|Konsultan Bisnis|Auditor|CEO',
                'relationships' => 'ESTJ adalah partner yang stabil dan berorientasi pada komitmen jangka panjang.',
                'color' => '#dc2626'
            ],
            [
                'type' => 'ESFJ',
                'name' => 'The Consul',
                'description' => 'Orang yang sangat peduli, sosial, dan populer - selalu bersemangat membantu.',
                'strengths' => 'Sangat peduli dan mendukung|Excellent dalam komunikasi|Terorganisir|Loyal dan setia|Fokus pada harmoni',
                'weaknesses' => 'Terlalu mengutamakan orang lain|Sulit mengatakan tidak|Terlalu sensitif terhadap kritik|Resisten terhadap perubahan',
                'career_suggestions' => 'Guru|Perawat|HR Manager|Event Planner|Customer Service|Konselor|Sales Representative|Administrator|Public Relations|Pekerja Sosial',
                'relationships' => 'ESFJ adalah partner yang sangat mendukung dan selalu berusaha menciptakan harmoni dalam hubungan.',
                'color' => '#059669'
            ],
            [
                'type' => 'ISTP',
                'name' => 'The Virtuoso',
                'description' => 'Eksperimenter yang berani dan praktis, master dari segala jenis alat.',
                'strengths' => 'Sangat praktis dan hands-on|Fleksibel dan mudah beradaptasi|Calm under pressure|Independent|Excellent problem solver',
                'weaknesses' => 'Sulit mengekspresikan emosi|Cenderung menunda komitmen|Tidak suka aturan yang kaku|Terkadang terlalu impulsif',
                'career_suggestions' => 'Insinyur|Mekanik|Pilot|Programmer|Arsitek|Fotografer|Chef|Atlet|Teknisi|Forensic Scientist',
                'relationships' => 'ISTP menghargai kebebasan dan ruang personal dalam hubungan mereka.',
                'color' => '#7c3aed'
            ],
            [
                'type' => 'ISFP',
                'name' => 'The Adventurer',
                'description' => 'Seniman yang fleksibel dan menawan, selalu siap mengeksplorasi kemungkinan baru.',
                'strengths' => 'Sangat kreatif dan artistik|Fleksibel dan mudah beradaptasi|Gentle dan caring|Loyal dan setia|Open-minded',
                'weaknesses' => 'Terlalu sensitif terhadap kritik|Sulit membuat keputusan|Cenderung menunda-nunda|Sulit menghadapi konflik',
                'career_suggestions' => 'Seniman|Desainer|Fotografer|Musisi|Konselor|Guru|Perawat|Veterinarian|Chef|Terapis',
                'relationships' => 'ISFP adalah partner yang gentle dan mendukung, menghargai keharmonisan dalam hubungan.',
                'color' => '#0891b2'
            ],
            [
                'type' => 'ESTP',
                'name' => 'The Entrepreneur',
                'description' => 'Orang yang cerdas, energik, dan sangat perceptive - benar-benar menikmati hidup di edge.',
                'strengths' => 'Sangat energik dan antusias|Praktis dan realistis|Excellent dalam komunikasi|Fleksibel dan mudah beradaptasi|Good under pressure',
                'weaknesses' => 'Impulsif dan tidak sabar|Sulit fokus jangka panjang|Tidak suka teori abstrak|Cenderung mengambil risiko berlebihan',
                'career_suggestions' => 'Sales Representative|Entrepreneur|Marketing Manager|Event Planner|Paramedic|Police Officer|Chef|Atlet|Real Estate Agent|Consultant',
                'relationships' => 'ESTP membawa kegembiraan dan spontanitas dalam hubungan mereka.',
                'color' => '#ea580c'
            ],
            [
                'type' => 'ESFP',
                'name' => 'The Entertainer',
                'description' => 'Orang yang spontan, energik, dan antusias - hidup tidak pernah membosankan di sekitar mereka.',
                'strengths' => 'Sangat antusias dan energik|Excellent dalam komunikasi|Fleksibel dan mudah beradaptasi|Warm dan caring|Practical',
                'weaknesses' => 'Sulit fokus jangka panjang|Terlalu sensitif terhadap kritik|Cenderung menunda-nunda|Sulit menghadapi konflik',
                'career_suggestions' => 'Entertainer|Teacher|Sales Representative|Event Planner|Counselor|Social Worker|Photographer|Chef|Nurse|Public Relations',
                'relationships' => 'ESFP adalah partner yang fun-loving dan selalu berusaha membuat pasangan mereka bahagia.',
                'color' => '#d946ef'
            ]
        ];

        foreach ($results as $result) {
            MbtiResult::create($result);
        }
    }
}


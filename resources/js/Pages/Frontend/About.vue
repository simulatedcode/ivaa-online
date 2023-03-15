<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import NavBar from "@/Components/Frontend/NavBar.vue";
import Footer from "@/Components/Frontend/Footer.vue";
</script>

<template>
    <div>
        <Head title="About" />
        <div class="relative bg-gray-100 min-h-screen dark:bg-[#111600]">
            <NavBar />
            <section
                class="relative overflow-hidden pt-28 pb-20 dark:bg-[#111600]"
            >
                <div class="lg:max-w-5xl mx-auto min-h-screen px-6">
                    <h1
                        class="text-5xl mx-auto font-bold text-center md:text-6xl lg:text-7xl"
                    >
                        Sejarah IVAA
                    </h1>
                    <p
                        class="mt-6 indent-8 text-justify text-gray-700 text-md leading-relaxed md:mt-8 md:text-lg lg:mt-10"
                    >
                        Indonesian Visual Art Archive (IVAA) didirikan April
                        2007 sebagai organisasi nirlaba yang berkembang dari
                        Yayasan Seni Cemeti (1995-2007). Dalam kerjanya,
                        Indonesian Visual Art Archive (IVAA) menggerakkan
                        unsur-unsur pengumpulan dan eksplorasi arsip, sekaligus
                        fasilitasi penelitian melalui Internet dan ruang
                        fisiknya di Yogyakarta. IVAA adalah penerus dari gagasan
                        ruang alternatif yang menandai dinamika seni kontemporer
                        pasca Reformasi. Berangkat dari tafsir atas kebutuhan
                        mendesak atas keberadaan infrastruktur seni di luar
                        inisiasi pemerintah dan lingkungan akademis, IVAA
                        kemudian perlu mencermati jalur dan muatan yang berusaha
                        dikomunikasikan oleh para pelaku seni. IVAA percaya
                        bahwa seni, dalam hal ini seni rupa, mampu membuka
                        wawasan dan pemahaman atas apa yang terjadi di
                        lingkungan sekitar. Pemikiran kritis dan aspirasi warga
                        perlu dicatat, ditelaah, dan disosialisasikan. Sebagai
                        salah satu upaya eksplorasi arsip, IVAA menyadari
                        pentingnya membawa kisah-kisah yang terkandung dalam
                        arsip kepada khalayak. Melalui pameran arsip, sejarah
                        dihadirkan sebagai pengalaman yang cair dan hangat.
                        Akumulasi pengalaman inilah yang selalu memperkaya
                        khazanah kebudayaan kita, melalui terbukanya ruang
                        percakapan intim yang kemudian menyusun sejarah-sejarah
                        baru dalam kehidupan manusia.
                    </p>
                </div>
            </section>
            <Footer />
        </div>
    </div>
</template>

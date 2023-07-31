import React from "react";
import Flickity from "react-flickity-component";
import Authenticated from "@/Layouts/Authenticated/index";
import { Head } from "@inertiajs/react";
import FeaturedMovie from "@/Components/FeaturedMovie";
import MovieCard from "@/Components/MovieCard";

export default function Dashboard() {
    const flickityOptions = {
        cellAlign: "left",
        contain: true,
        groupCells: 1,
        wrapAround: false,
        pageDots: false,
        prevNextButtons: false,
        draggable: ">1",
    };

    return (
        <Authenticated>
            <Head>
                <link
                    rel="stylesheet"
                    href="https://unpkg.com/flickity@2/dist/flickity.min.css"
                />
                <title>Dashboard</title>
            </Head>
            <div>
                <div className="font-semibold text-[22px] text-black mb-4">
                    Featured Movies
                </div>
                <Flickity className="gap-[30px]" options={flickityOptions}>
                    {[1, 2, 3, 4].map((i) => (
                        // Movie Thumbnail
                        <FeaturedMovie
                            key={i}
                            slug="the-batman-in-love"
                            name={`the Batman In Love ${i}`}
                            category="Comedy"
                            thumbnail="https://w0.peakpx.com/wallpaper/565/291/HD-wallpaper-batman-and-wonder-woman-love-romance-batman-wonder-woman-superheroes-love-artist-artwork-digital-art.jpg"
                            rating={i + 1}
                        />
                    ))}
                </Flickity>
            </div>

            <div className="mt-[50px]">
                <div className="font-semibold text-[22px] text-black mb-4">
                    Browse
                </div>
                <Flickity className="gap-[30px]" options={flickityOptions}>
                    {[1, 2, 3, 4, 5, 6].map((i) => (
                        <MovieCard
                            key={i}
                            slug="the-batman-in-love"
                            name={`the Batman In Love ${i}`}
                            category="Comedy"
                            thumbnail="https://w0.peakpx.com/wallpaper/565/291/HD-wallpaper-batman-and-wonder-woman-love-romance-batman-wonder-woman-superheroes-love-artist-artwork-digital-art.jpg"
                        />
                    ))}
                </Flickity>
            </div>
        </Authenticated>
    );
}

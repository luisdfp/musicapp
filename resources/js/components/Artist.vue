<template>
    <div v-if="loading" class="text-center">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div v-else class="artist">
        <div>
            <h1>{{ artist.name }}</h1>
            <p class="info"><img class="portrait" :src="artist.portrait_url" :alt="artist.name + 'portrait'">{{ artist.bio }}</p>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>Título</th>
                <th>Duración</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="song in artist.songs">
                <td>{{ song.title }}</td>
                <td>{{ secondsToTime(song.duration) }}</td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
    import api from '../api'
    import { secondsToTime } from "../helpers";

    export default {
        name: "Artist",
        props: ['id'],
        mounted() {
            api.getArtist(this.id).then((response) => {
                Object.assign(this.artist, response.data);
                this.loading = false;
            })
        },
        methods: {
            secondsToTime
        },
        data() {
            return {
                loading: true,
                artist: {
                    name: '',
                    bio: '',
                    portrait_url: '',
                    songs: []
                }
            }
        }
    }
</script>

<style scoped>
    .info {
        margin-top: 20px;
    }

    .portrait {
        float: left;
        margin-right: 10px;
        margin-bottom: 10px;
        max-width: 200px;
    }

</style>

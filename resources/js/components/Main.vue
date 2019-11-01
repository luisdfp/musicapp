<template>
    <div>
        <h1 class="title">Canciones del momento</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Artista</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                <tr v-if="songs.length" v-for="song in songs">
                    <td>{{ song.title }}</td>
                    <td><router-link :to="'/artist/' + song.artist.id">{{ song.artist.name }}</router-link></td>
                    <td>{{ secondsToTime(song.duration) }}</td>
                </tr>
            </tbody>
        </table>
        <div v-if="loading" class="text-center">
            <div class="spinner-border" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

    </div>
</template>

<script>
    import api from "../api";
    import { secondsToTime } from "../helpers";

    export default {
        name: "Main",
        methods: {
            secondsToTime
        },
        mounted() {
            api.getAllSongs().then((response) => {
                this.songs = response.data;
                this.loading = false;
            })
        },
        data() {
            return {
                loading: true,
                songs: []
            }
        }
    }
</script>

<style scoped>
    .title {
        margin: 20px 0;
    }
</style>

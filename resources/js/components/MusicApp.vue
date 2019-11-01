<template>
    <div class="song-list container">
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
                <tr v-for="song in songs">
                    <td>{{ song.title }}</td>
                    <td>{{ song.artist.name }}</td>
                    <td>{{ secondsToTime(song.duration) }}</td>
                </tr>
            </tbody>
        </table>

    </div>

</template>

<script>
    export default {
        name: "MusicApp",
        components: {
            Song
        },
        data() {
            return {
                songs: [
                    {
                        id: 1,
                        title: 'El prisionero',
                        artist: {
                            id: 1,
                            name: 'Pibes Chorros'
                        },
                        duration: 300
                    },
                    {
                        id: 2,
                        title: 'Andrea',
                        artist: {
                            id: 1,
                            name: 'Pibes Chorros'
                        },
                        duration: 250
                    },
                    {
                        id: 3,
                        title: 'La danza del humo',
                        artist: {
                            id: 1,
                            name: 'Pibes Chorros'
                        },
                        duration: 257
                    },
                    {
                        id: 4,
                        title: 'Sentimiento villero',
                        artist: {
                            id: 1,
                            name: 'Pibes Chorros'
                        },
                        duration: 314
                    }
                ]
            }
        },
        methods: {
            secondsToTime(seconds) {
                return (new Date(seconds * 1000)).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0];
            }
        }
    }
</script>

<style scoped>
    .title {
        margin: 20px 0;
    }
</style>

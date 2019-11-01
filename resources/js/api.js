import axios from 'axios'

function getAllSongs() {
    return axios.get('/api/songs');
}

function getArtist(id) {
    return axios.get('/api/artist/' + id);
}

export default {
    getAllSongs,
    getArtist
};

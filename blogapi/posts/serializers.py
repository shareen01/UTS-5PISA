from dataclasses import field
from pyexpat import model
from .models import Post
from rest_framework import serializers
from django.contrib.auth import get_user_model

class PostSerializer(serializers.ModelSerializer):
    class Meta:
        fields = ('id','author','title','body','created_at',)
        model = Post

class UserSerializer(serializers.ModelSerializer):
    class Meta:
        model = get_user_model()
        fields = ('id','username',)
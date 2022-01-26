from winreg import QueryValue
from django import views
from django.db.models.query import QuerySet
from rest_framework import generics, viewsets
from .models import Post
from .serializers import PostSerializer, UserSerializer
from django.contrib.auth import get_user_model

class PostViewSet(viewsets.ModelViewSet):
    queryset = Post.objects.all()
    serializer_class = PostSerializer

class UserViewSet(viewsets.ModelViewSet):
    queryset = get_user_model().objects.all()
    serializer_class = UserSerializer

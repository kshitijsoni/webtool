# Week 08 - (Jul 20 - Jul 26)

## Tasks scheduled for this week
- [X] Check in with mentors ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- [X] Documentation of the codes with more docstrings ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- [X] (Stretch Goal) Write a Blog Post about my progress and the results gotten so far ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green)
- [X] Parsing Portuguese sentences with SketchEngine (I've checked in with Prof. Tiago and asked for help) ![help](https://img.shields.io/static/v1?label=&message=need_help&color=blue) ![carryover](https://img.shields.io/static/v1?label=carryover&message=continue_next_week&color=yellow)
- [X] Explore other word-alignment models ![completed](https://img.shields.io/static/v1?label=&message=completed&color=green) ![carryover](https://img.shields.io/static/v1?label=carryover&message=continue_next_week&color=yellow)
- [X] Annotation Transfer with neural networks model ![carryover](https://img.shields.io/static/v1?label=carryover&message=continue_next_week&color=yellow)
  - [X] Research Idea 1: Implement a better multilingual parser using transformers and then perform cross-lingual annotation transfer after parsing. ![definition](https://img.shields.io/static/v1?label=result&message=disappointing&color=red)
  - [X] Research Idea 2: Given a sentence (a sequence of word tokens), generate a sequence of labels. Inspiration: Google T5 model (released 2020) that can learn from a text-to-text transfer learning task.  ![definition](https://img.shields.io/static/v1?label=result&message=disappointing&color=red)

## What I Learn from Mentors' Meetings
- I should try out other word-alignment models since I have only used `fast_align`, which only implements IBM GIZA++ Model 2.
  1. I attempted to implement IBM GIZA++ latest version (Model 5) using the `nltk.align` package but it relies on classifying the words into 50 classes before parsing. The code for classification is [here](http://www.fjoch.com/mkcls.html) but I run into CompilerError when I used the provided files. 
  2. I found a recently published [paper](https://arxiv.org/abs/2004.14675) (Zenkel et al., 2020) on an end-to-end neural model that outperforms GIZA++ but no code is provided.
- Arthur has pre-trained a language model which is fine-tuned for FrameNet. I should look into representing words using Arthur's model instead of using pre-trained language models.
- I need to explain the result obtained thus far (such as the interpretation of the hamming-loss, etc.)
- I can use Sketch-Engine to obtain the constituents of Portuguese sentences.
- It's worth exploring methods that improve the annotation transfer to DE (since the [training dataset](https://github.com/andersjo/any-language-frames) includes DE data) and enable few-shot/zero-shot annotation transfer to PT (since the [training dataset](https://github.com/andersjo/any-language-frames) does not include PT data)
  1. **A new baseline**: I found a recently published paper "Cross-Lingual Semantic Role Labeling with High-Quality Translated Training Corpus"
 (in ACL 2020) that performs translation-based projection. They also provide their [implementation](https://github.com/scofield7419/XSRL-ACL/tree/master/Projection) on GitHub. 

## Research Experimental Results
**Motivation**

## Next Steps 
#### Annotation Transfer


---
Remember to use tags! You can add multiple tags to any task.

![completed](https://img.shields.io/static/v1?label=&message=completed&color=green) = done and ready for User Acceptance Testing (UAT)<br>
![uat-passed](https://img.shields.io/static/v1?label=UAT&message=passed&color=success) = tested and ready to merge with Master<br>
![deployed](https://img.shields.io/static/v1?label=&message=deployed&color=success) = merged with Master<br>
![carryover](https://img.shields.io/static/v1?label=&message=carryover&color=yellow) = task deferred from one week to the next<br>
![help](https://img.shields.io/static/v1?label=&message=need_help&color=blue) = needs help from mentors<br>
![definition](https://img.shields.io/static/v1?label=&message=needs_definition&color=orange) = **blocked** task that needs discussion with mentors<br>
![stretch](https://img.shields.io/static/v1?label=&message=stretch&color=orange) = stretch goal <br>
![important](https://img.shields.io/static/v1?label=&message=important&color=red) = something that needs to be addressed immediately<br>


Use [Shields.io](https://shields.io) to creat new tags if needed.
